<?php
/**
 *  * Created by PhpStorm.
 * User: Fathur Rohman
 * Date: 27/09/2018
 * Time: 10:21
 */

namespace Rbac\Service;

use Laminas\Authentication\Adapter\AdapterInterface;
use Laminas\Authentication\Result;
use Laminas\Crypt\Password\Bcrypt;
use Rbac\Entity\User;
use Laminas\Authentication\Adapter\Ldap;
use Laminas\Hydrator\Filter\MethodMatchFilter;
use Laminas\Hydrator\ReflectionHydrator;

class AuthAdapter implements AdapterInterface
{
    private $user;
    protected $result;

    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;

    const LDAP_OPT_DIAGNOSTIC_MESSAGE = 0x0032;
    /**
     * AuthAdapter constructor.
     * @param UsersRepository $usersRepository
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;

    }

    /**
     * @return Users
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * User email.
     * @var string
     */
    private $email;
    /**
     * Password
     * @var string
     */
    private $password;
    /**
     * Sets user email.
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * Username.
     * @var string
     */
    private $username;
    /**
     * Sets user username.
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Sets password.
     */
    public function setPassword($password)
    {
        $this->password = (string)$password;
    }
    /**
     * Performs an authentication attempt.
     */
    public function authenticate()
    {
        //cek for empty input
        if(empty($this->username) OR empty($this->password)){
            return  new Result(
                Result::FAILURE,
                null,
                ['Authentication Failed xx']);
        }

        // Check the database if there is a user with such email.
        // Check the database if there is a user with such email.
        $user = $this->entityManager->getRepository(User::class)
                ->findOneByUsername($this->username);
        
        //var_dump($user->getEmail());exit;
        //return $user;
        // If there is no such user, return 'Identity Not Found' status.
        if ($user == null) {
            return new Result(
                Result::FAILURE_IDENTITY_NOT_FOUND,
                null,
                ['user not found : Invalid credentials.']);
        }

        //ini user sudah ada nilainya
        $this->user = $user;

        // If the user with such email exists, we need to check if it is active or retired.
        // Do not allow retired users to log in.
        if ($user->getStatus()==User::STATUS_RETIRED) {
            return new Result(
                Result::FAILURE,
                null,
                ['User is retired.']);
        }



        $email = $user->getEmail();
        $passwordHash = $user->getPassword();
        $loginType = $user->getLoginType();

        // if login type is ldap we check to ad
        // harcoded config ad ip
        if($loginType=='ldap'){
            return $this->authenticateLdap($email,$this->password);
        }

        // Now we need to calculate hash based on user-entered password and compare
        // it with the password hash stored in database.
        $bcrypt = new Bcrypt();
        $passwordHash = $user->getPassword();
        if ($bcrypt->verify($this->password, $passwordHash)) {
            // Great! The password hash matches. Return user identity (email) to be
            // saved in session for later use.

            $identity = ['username'=>$user->getUsername(),'email'=>$user->getEmail()] ;

            $hydrator = new ReflectionHydrator();
            //$hydrator->addFilter('getPassword', new MethodMatchFilter('getPassword')); //TODO
            $hydrator->addFilter('password', new MethodMatchFilter('getPassword')); //TODO
            $identity = $hydrator->extract($user);
            unset($identity['password']);

            return  new Result(
                Result::SUCCESS,
                $identity,
                ['Non Ldap Authenticated successfully.']);
        }

        // If password check didn't pass return 'Invalid Credential' failure status.
        return  new Result(
            Result::FAILURE_CREDENTIAL_INVALID,
            null,
            ['failed : Invalid credentials.']);
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }



    public function authenticateLdap($ldaprdn,$ldapPass){
        //TODO ini akan dipindah ke config nanti aja
        $ldapconnServer = "ldap://172.16.200.50" ; # AD Server yang terbaru (16 Maret 2018)
        $ldapconn = ldap_connect($ldapconnServer) or die("Could not connect to LDAP server ");
        $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldapPass);
        if (!$ldapbind) {
            $error_text= ldap_err2str(ldap_errno($ldapconn));
            if (ldap_get_option($ldapconn, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error)) {
                echo "Error Binding to LDAP: $extended_error";
            }
            return new Result(
                Result::FAILURE_CREDENTIAL_INVALID,
                null,
                [$error_text]);

        }else{
            return new Result(
                Result::SUCCESS,
                $this->email,
                ['Ldap Authenticated successfully.']);
        }

    }

}