<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 23/04/2018
 * Time: 9:45
 */
namespace Rbac\Service\Factory;

use Interop\Container\ContainerInterface;
use Rbac\Service\AuthAdapter;
use Laminas\ServiceManager\Factory\FactoryInterface;

class AuthAdapterFactory implements FactoryInterface{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Get Doctrine entity manager from Service Manager.
        $entityManager = $container->get('doctrine.entitymanager.orm_default');        
        return new AuthAdapter($entityManager);
    }
}