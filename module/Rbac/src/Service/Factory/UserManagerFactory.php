<?php
namespace Rbac\Service\Factory;

use Interop\Container\ContainerInterface;
use Rbac\Model\UsersRepository;
use Rbac\Service\UserManager;
use Rbac\Service\RoleManager;
use Rbac\Service\PermissionManager;

/**
 * This is the factory class for UserManager service. The purpose of the factory
 * is to instantiate the service and pass it dependencies (inject dependencies).
 */
class UserManagerFactory
{
    /**
     * This method creates the UserManager service and returns its instance.
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return UserManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $userRepository = $container->get(UsersRepository::class);
        $roleManager = $container->get(RoleManager::class);
        $permissionManager = $container->get(PermissionManager::class);
        $viewRenderer = $container->get('ViewRenderer');
        $config = $container->get('Config');

        return new UserManager($userRepository, $roleManager, $permissionManager, $viewRenderer, $config);
    }
}
