<?php
/**
 *  * Created by PhpStorm.
 * User: Fathur Rohman
 * Date: 28/09/2018
 * Time: 11:11
 */
namespace Rbac\Service;

use Rbac\Entity\Users;
use Rbac\Entity\Roles;
use Rbac\Model\UsersRepository;
use Laminas\Math\Rand;
use Laminas\Mail;
use Laminas\Mail\Transport\Smtp as SmtpTransport;
use Laminas\Mail\Transport\SmtpOptions;
use Laminas\Mime\Message as MimeMessage;
use Laminas\Mime\Part as MimePart;
use Laminas\Validator\EmailAddress;

/**
 * This service is responsible for adding/editing users
 * and changing user password.
 */
class UserManager
{

    /**
     * Role manager.
     * @var Rbac\Service\RoleManager
     */
    private $roleManager;

    /**
     * Permission manager.
     * @var User\Service\PermissionManager
     */
    private $permissionManager;

    /**
     * PHP template renderer.
     * @var Laminas\View\Renderer\PhpRenderer
     */
    private $viewRenderer;

    /**
     * App config.
     * @var array
     */
    private $config;

    /**
     * UserManager constructor.
     * @param UsersRepository $usersRepository
     * @param RoleManager $roleManager
     * @param PermissionManager $permissionManager
     * @param $viewRenderer
     * @param $config
     */
    public function __construct( UsersRepository $usersRepository, RoleManager $roleManager,PermissionManager $permissionManager, $viewRenderer, $config)
    {
        $this->usersRepository = $usersRepository;
        $this->roleManager = $roleManager;
        $this->permissionManager = $permissionManager;
        $this->viewRenderer = $viewRenderer;
        $this->config = $config;
    }

    /**
     * This method adds a new user.
     */
    public function addUser($data)
    {
        // Do not allow several users with the same email address.
        if( $user = $this->checkUserExists($data['email'])) {
            throw new \Exception("User with email address " . $data['$email'] . $user. " already exists");
        }

        // Create new User entity.
        $user = new Users();
        if (array_key_exists("ldap",$data)){
            $user->setLoginType('ldap');
        }

        $validator = new EmailAddress();
        if ($validator->isValid($data['email'])) {
            // email appears to be valid
        } else {
            // email is invalid; print the reasons
            //foreach ($validator->getMessages() as $messageId => $message) {
              //  printf("Validation failure '%s': %s\n", $messageId, $message);
            //}
        }

        $user->setEmail($data['email']);
        $user->setUserId($data['email']);
        $user->setFullName($data['full_name']);

        // Encrypt password and store the password in encrypted state.
        $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT);
        $user->setPassword($passwordHash);

        $user->setLocked(0);

        $currentDate = date('Y-m-d H:i:s');
        $user->setMetaDtCreate($currentDate);
        $user->setMetaCreateBy('HARDCODED BY ME');

        // Assign roles to user.
        //$this->assignRoles($user, $data['roles']);

        // Add the entity to the repository.
        $this->usersRepository->add($user);
        return $user;
    }

    /**
     * This method updates data of an existing user.
     */
    public function updateUser($user, $data)
    {
        // Do not allow to change user email if another user with such email already exits.
        if($user->getEmail()!=$data['email'] && $this->checkUserExists($data['email'])) {
            throw new \Exception("Another user with email address " . $data['email'] . " already exists");
        }

        $user->setEmail($data['email']);
        $user->setFullName($data['full_name']);
        $user->setStatus($data['status']);

        // Assign roles to user.
        $this->assignRoles($user, $data['roles']);

        // Apply changes to database.
        $this->entityManager->flush();

        return true;
    }

    /**
     * A helper method which assigns new roles to the user.
     */
    private function assignRoles($user, $roleIds)
    {
        // Remove old user role(s).
        $user->getRoles()->clear();

        // Assign new role(s).
        foreach ($roleIds as $roleId) {
            $role = $this->entityManager->getRepository(Role::class)
                ->find($roleId);
            if ($role==null) {
                throw new \Exception('Not found role by ID');
            }

            $user->addRole($role);
        }
    }

    /**
     * This method checks if at least one user presents, and if not, creates
     * 'Admin' user with email 'admin@example.com' and password 'Secur1ty'.
     */
    public function createAdminUserIfNotExists()
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([]);
        if ($user==null) {

            $this->permissionManager->createDefaultPermissionsIfNotExist();
            $this->roleManager->createDefaultRolesIfNotExist();

            $user = new User();
            $user->setEmail('admin@example.com');
            $user->setFullName('Admin');
            $bcrypt = new \Bcrypt();
            $passwordHash = $bcrypt->create('Secur1ty');
            $user->setPassword($passwordHash);
            $user->setStatus(User::STATUS_ACTIVE);
            $user->setDateCreated(date('Y-m-d H:i:s'));

            // Assign user Administrator role
            $adminRole = $this->entityManager->getRepository(Role::class)
                ->findOneByName('Administrator');
            if ($adminRole==null) {
                throw new \Exception('Administrator role doesn\'t exist');
            }

            $user->getRoles()->add($adminRole);

            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }

    /**
     * Checks whether an active user with given email address already exists in the database.
     */
    public function checkUserExists($email) {
        $this->usersRepository->setKeyIdentifier('email');
        $user = $this->usersRepository->get($email);
        //print_r($user->getEmail());exit();
        return $user !== null;
    }

    /**
     * Checks that the given password is correct.
     */
    public function validatePassword($user, $password)
    {
        $bcrypt = new \Bcryp();
        $passwordHash = $user->getPassword();

        if ($bcrypt->verify($password, $passwordHash)) {
            return true;
        }

        return false;
    }

    /**
     * Generates a password reset token for the user. This token is then stored in database and
     * sent to the user's E-mail address. When the user clicks the link in E-mail message, he is
     * directed to the Set Password page.
     */
    public function generatePasswordResetToken($user)
    {
        if ($user->getStatus() != User::STATUS_ACTIVE) {
            throw new \Exception('Cannot generate password reset token for inactive user ' . $user->getEmail());
        }

        // Generate a token.
        $token = Rand::getString(32, '0123456789abcdefghijklmnopqrstuvwxyz', true);

        // Encrypt the token before storing it in DB.
        $bcrypt = new Bcrypt();
        $tokenHash = $bcrypt->create($token);

        // Save token to DB
        $user->setPasswordResetToken($tokenHash);

        // Save token creation date to DB.
        $currentDate = date('Y-m-d H:i:s');
        $user->setPasswordResetTokenCreationDate($currentDate);

        // Apply changes to DB.
        $this->entityManager->flush();

        // Send an email to user.
        $subject = 'Password Reset';

        $httpHost = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'localhost';
        $passwordResetUrl = 'http://' . $httpHost . '/set-password?token=' . $token . "&email=" . $user->getEmail();

        // Produce HTML of password reset email
        $bodyHtml = $this->viewRenderer->render(
            'user/email/reset-password-email',
            [
                'passwordResetUrl' => $passwordResetUrl,
            ]);

        $html = new MimePart($bodyHtml);
        $html->type = "text/html";

        $body = new MimeMessage();
        $body->addPart($html);

        $mail = new Mail\Message();
        $mail->setEncoding('UTF-8');
        $mail->setBody($body);
        $mail->setFrom('no-reply@example.com', 'User Demo');
        $mail->addTo($user->getEmail(), $user->getFullName());
        $mail->setSubject($subject);

        // Setup SMTP transport
        $transport = new SmtpTransport();
        $options   = new SmtpOptions($this->config['smtp']);
        $transport->setOptions($options);

        $transport->send($mail);
    }

    /**
     * Checks whether the given password reset token is a valid one.
     */
    public function validatePasswordResetToken($email, $passwordResetToken)
    {
        // Find user by email.
        $user = $this->entityManager->getRepository(User::class)
            ->findOneByEmail($email);

        if($user==null || $user->getStatus() != User::STATUS_ACTIVE) {
            return false;
        }

        // Check that token hash matches the token hash in our DB.
        $bcrypt = new Bcrypt();
        $tokenHash = $user->getPasswordResetToken();

        if (!$bcrypt->verify($passwordResetToken, $tokenHash)) {
            return false; // mismatch
        }

        // Check that token was created not too long ago.
        $tokenCreationDate = $user->getPasswordResetTokenCreationDate();
        $tokenCreationDate = strtotime($tokenCreationDate);

        $currentDate = strtotime('now');

        if ($currentDate - $tokenCreationDate > 24*60*60) {
            return false; // expired
        }

        return true;
    }

    /**
     * This method sets new password by password reset token.
     */
    public function setNewPasswordByToken($email, $passwordResetToken, $newPassword)
    {
        if (!$this->validatePasswordResetToken($email, $passwordResetToken)) {
            return false;
        }

        // Find user with the given email.
        $user = $this->entityManager->getRepository(User::class)
            ->findOneByEmail($email);

        if ($user==null || $user->getStatus() != User::STATUS_ACTIVE) {
            return false;
        }

        // Set new password for user
        $bcrypt = new Bcrypt();
        $passwordHash = $bcrypt->create($newPassword);
        $user->setPassword($passwordHash);

        // Remove password reset token
        $user->setPasswordResetToken(null);
        $user->setPasswordResetTokenCreationDate(null);

        $this->entityManager->flush();

        return true;
    }

    /**
     * This method is used to change the password for the given user. To change the password,
     * one must know the old password.
     */
    public function changePassword($user, $data)
    {
        $oldPassword = $data['old_password'];

        // Check that old password is correct
        if (!$this->validatePassword($user, $oldPassword)) {
            return false;
        }

        $newPassword = $data['new_password'];

        // Check password length
        if (strlen($newPassword)<6 || strlen($newPassword)>64) {
            return false;
        }

        // Set new password for user
        $bcrypt = new Bcrypt();
        $passwordHash = $bcrypt->create($newPassword);
        $user->setPassword($passwordHash);

        // Apply changes
        $this->entityManager->flush();

        return true;
    }
}

