<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Rbac\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class LoginController extends AbstractActionController
{

    private $serviceLogin;
    
    public function __construct($serviceLogin)
    {
        $this->serviceLogin = $serviceLogin;
    }

    public function indexAction()
    {
        return new ViewModel();
    }
}
