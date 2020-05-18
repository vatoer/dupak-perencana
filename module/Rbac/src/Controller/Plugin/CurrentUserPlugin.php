<?php
namespace Rbac\Controller\Plugin;

use Laminas\Authentication\AuthenticationService;
use Laminas\Mvc\Controller\Plugin\AbstractPlugin;
use Laminas\Session\SessionManager;

/**
 * This controller plugin is designed to let you get the currently logged in User entity
 * inside your controller.
 */
class CurrentUserPlugin extends AbstractPlugin
{
    /**
     * @var SessionManager
     */
    private $sessionManager;

    /**
     * Authentication service.
     * @var Laminas\Authentication\AuthenticationService
     */
    private $authService;

    /**
     * Logged in user.
     * @var \Rbac\Entity\Users
     */
    private $user = null;
    private $roles = null;

    /**
     * CurrentUserPlugin constructor.
     * @param AuthenticationService $authService
     * @param SessionManager $sessionManager
     */
    public function __construct(AuthenticationService $authService, SessionManager $sessionManager )
    {
        $this->authService = $authService;
        $this->sessionManager = $sessionManager;
    }

    /**
     * This method is called when you invoke this plugin in your controller: $user = $this->currentUser();
     * @param bool $useCachedUser If true, the User entity is fetched only on the first call (and cached on subsequent calls).
     * @return User|null
     * @throws \Exception
     *//*
    public function __invoke($useCachedUser = true)
    {
        // If current user is already fetched, return it.
        if ($useCachedUser && $this->user!==null)
            return $this->user;

        //$this->authService->

        // Check if user is logged in.
        if ($this->authService->hasIdentity()) {

            //fetch user dari session
            $this->user = $this->sessionContainer->offsetGet('user');

            if ($this->user==null) {
                // Oops.. the identity presents in session, but there is no such user in database.
                // We throw an exception, because this is a possible security problem.
                throw new \Exception('Not found user with such email');
            }

            // Return found User.
            return $this->user;
        }

        return null;
    }*/

    public function getRoles()
    {
        // Check if user is logged in.
        if ($this->authService->hasIdentity()) {

            //fetch user dari session
            $this->roles = $this->sessionManager->getStorage()->offsetGet('roles');

            if ($this->user==null) {
                // Oops.. the identity presents in session, but there is no such user in database.
                // We throw an exception, because this is a possible security problem.
                throw new \Exception('Not found user with such email');
            }

            // Return found User.
            return $this->roles;
        }

        return null;
    }


    public function getUser()
    {
        // Check if user is logged in.
        if ($this->authService->hasIdentity()) {

            //return $this->authService->getIdentity();
            //fetch user dari session
            $this->user = $this->sessionManager->getStorage()->offsetGet('user');

            if ($this->user==null) {
                // Oops.. the identity presents in session, but there is no such user in database.
                // We throw an exception, because this is a possible security problem.
                throw new \Exception('Not found user with such email');
            }

            // Return found User.
            return $this->user;
        }

        return null;
    }

    public function getIdentity(){
        return $this->authService->getIdentity();
    }

    public function getSessionManager(){
        return $this->sessionManager;
    }

    public function getStorage(){
        return $this->sessionManager->getStorage();
    }

    public function setSessionOffset($offset,$value){
        $this->sessionManager->getStorage()->offsetSet($offset,$value);
    }

    public function getSessionOffset($offset){
        $this->sessionManager->getStorage()->offsetGet($offset);
    }

}



