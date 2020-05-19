<?php
namespace Rbac\Controller;

use Rbac\Service\UserManager;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Mvc\MvcEvent;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;

use Rbac\Entity\User;

//use Rbac\Form\UserForm;
//use Rbac\Form\PasswordChangeForm;
//use Rbac\Form\PasswordResetForm;

/**
 * This controller is responsible for user management (adding, editing,
 * viewing users and changing user's password).
 */
class UserController extends AbstractActionController
{

    /**
     * @var UserManager
     */
    private $userManager;

    private $apiResponse = [
        'error' => 1, // default error
        'error_count' => 0,
        'warning' => false, // default g ada warning
        'warning_count' => 0,
        'messages' => 'terdapat kesalahan',
        'data' => null];

    /**
     * Constructor.
     */
    public function __construct( $userManager )
    {
        $this->userManager = $userManager;
    }


    /**
     * @param MvcEvent $e
     * @return mixed
     */
    public function onDispatch(MvcEvent $e)
    {
        // Call the base class' onDispatch() first and grab the response
        $response = parent::onDispatch($e);

        // Set alternative layout
        $this->layout()->setTemplate('layout/rbac');

        // Return the response
        return $response;
    }

    /**
     * This is the default "index" action of the controller. It displays the
     * list of users.
     */
    public function indexAction()
    {
        $v = new ViewModel();
    }


    

    /**
     * The "view" action displays a page allowing to view user's details.
     */
    public function viewAction()
    {
        $id = (int)$this->params()->fromRoute('id', -1);
        if ($id<1) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

        // Find a user with such ID.
        $user = $this->entityManager->getRepository(User::class)
            ->find($id);

        if ($user == null) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

        return new ViewModel([
            //'user' => $user
        ]);
    }

    public function resetAllAction(){


        $this->userManager->resetPasswordAll();

        return $this->getResponse();

        // $vm = new ViewModel();
        // $vm->setTerminal(true); // Does not affect any render behaviour (?)
        // return $vm;
    }

   
}


