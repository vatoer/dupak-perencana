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
use Rbac\Service\AuthAdapter;
use Rbac\Service\AuthManager;
use Laminas\Authentication\AuthenticationService;
use Laminas\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ListController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $adapter = $container->get(AuthAdapter::class);
        $setSessionContainer =  $container->get('ContainerNamespace');
        $authenticationService = $container->get(AuthenticationService::class);
        $authManager = $container->get(AuthManager::class);
        $index = new IndexController($authManager, $setSessionContainer );
         return $index;
    }
}