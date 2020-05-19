<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 23/04/2018
 * Time: 10:12
 */


namespace  Rbac\Factory;

use Interop\Container\ContainerInterface;
use Rbac\Controller\IndexController;
use Rbac\Controller\UserController;
use Rbac\Service\AuthAdapter;
use Rbac\Service\UserManager;
use Laminas\ServiceManager\Factory\FactoryInterface;

class UserControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ListController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $userManager = $container->get(UserManager::class);
        $index = new UserController( $userManager);
         return $index;
    }
}