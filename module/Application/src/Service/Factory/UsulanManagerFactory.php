<?php 
namespace Application\Service\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Service\UsulanManager;

/**
 * This is the factory for UsulanManager. Its purpose is to instantiate the
 * service.
 */
class UsulanManagerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                    $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        // Instantiate the service and inject dependencies
        return new UsulanManager($entityManager);
    }
}