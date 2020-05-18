<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 23/04/2018
 * Time: 9:45
 */
namespace Rbac\View\Helper\Factory;
use Laminas\Authentication\AuthenticationService;
use Interop\Container\ContainerInterface;
use Rbac\Model\UsersRepository;
use Rbac\View\Helper\UserInfo;
use Laminas\ServiceManager\Factory\FactoryInterface;

class UserInfoFactory implements FactoryInterface{

    //public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
        //ContainerNamespace didefinisikan di module.config
        //$sessionContainer =  $container->get('ContainerNamespace');
        $authenticationService =  $container->get(AuthenticationService::class);
        //$user = new UserInfo($sessionContainer);
        $user = new UserInfo($authenticationService);
        return $user;
    }
}
