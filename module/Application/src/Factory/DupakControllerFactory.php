<?php 
namespace Application\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\DupakController;
use Application\Service\UsulanManager;

/**
 * This is the factory for ReferenceController. Its purpose is to instantiate the
 * controller.
 */
class DupakControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $usulanManager = $container->get(UsulanManager::class);
        
        // Instantiate the controller and inject dependencies
        return new DupakController($entityManager, $usulanManager);
    }
}

?>