<?php 
namespace Application\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\ReferenceController;

/**
 * This is the factory for ReferenceController. Its purpose is to instantiate the
 * controller.
 */
class ReferenceControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        // Instantiate the controller and inject dependencies
        return new ReferenceController($entityManager);
    }
}

?>