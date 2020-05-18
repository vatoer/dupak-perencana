<?php
/**
 *  * Created by PhpStorm.
 * User: Fathur Rohman
 * Date: 28/09/2018
 * Time: 11:10
 */
namespace Rbac\Service\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Authentication\AuthenticationService;
use Laminas\Session\SessionManager;
use Rbac\Service\AuthManager;
use Rbac\Service\UserManager;

/**
 * This is the factory class for AuthManager service. The purpose of the factory
 * is to instantiate the service and pass it dependencies (inject dependencies).
 */
class AuthManagerFactory implements FactoryInterface
{

    /**
     * This method creates the AuthManager service and returns its instance.
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return AuthManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Instantiate dependencies.
        $authenticationService = $container->get(AuthenticationService::class);
        $sessionManager = $container->get(SessionManager::class);
        $sessionContainer = $container->get('ContainerNamespace'); //variable ini di declare di module.config

        // Get contents of 'access_filter' config key (the AuthManager service
        // will use this data to determine whether to allow currently logged in user
        // to execute the controller action or not.
        $config = $container->get('Config');
        if (isset($config['access_filter']))
            $config = $config['access_filter'];
        else
            $config = [];

        return new AuthManager($authenticationService,$sessionManager, $sessionContainer, $config);
    }
}
