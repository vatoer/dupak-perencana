<?php
namespace Rbac\Controller\Plugin\Factory;

use Interop\Container\ContainerInterface;
use Rbac\Controller\Plugin\CurrentUserPlugin;
use Laminas\Authentication\AuthenticationService;
use Laminas\Session\SessionManager;

class CurrentUserPluginFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $authService = $container->get(AuthenticationService::class);
        //$sessionContainer = $container->get('ContainerNamespace'); // ContainerNamespane dideclare di module.config
        $sessionManager = $container->get(SessionManager::class);

        return new CurrentUserPlugin( $authService, $sessionManager);
    }
}


