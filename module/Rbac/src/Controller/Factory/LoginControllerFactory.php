<?php
declare(strict_types=1);

namespace Rbac\Controller\Factory;

use Psr\Container\ContainerInterface;
//use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Rbac\Controller\LoginController;


class LoginControllerFactory extends FactoryInterface{
    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        //$entityManager = $container->get('doctrine.entitymanager.orm_default');
        //$usulanManager = $container->get(UsulanManager::class);
        
        // Instantiate the controller and inject dependencies
        return new LoginController('tes');
    }
}

?>