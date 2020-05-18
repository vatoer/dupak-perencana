<?php
/**
 * Created by PhpStorm.
 * User: Fathur Rohman
 * Date: 28/09/2018
 * Time: 8:58
 */

namespace Rbac\View\Helper;

use Laminas\Authentication\AuthenticationService;
use Laminas\Session\Container;
use Laminas\View\Helper\AbstractHelper;
use Rbac\Entity\Users;
class UserInfo extends AbstractHelper
{
    protected $user = null ;
    protected $authenticationService;
    //public function __construct(Container $container)
    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
        return $this;
    }

    public function getUser(){
        return $this->user;
    }

    public function getIdentity()
    {
       return $this->authenticationService->getIdentity();
    }

}