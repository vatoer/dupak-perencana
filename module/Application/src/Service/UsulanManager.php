<?php
namespace Application\Service;

use Application\Entity\TrUsulan;
use Laminas\Filter\StaticFilter;

class UsulanManager
{
/**
   * Doctrine entity manager.
   * @var Doctrine\ORM\EntityManager
   */
  private $entityManager;
  
  // Constructor is used to inject dependencies into the service.
  public function __construct($entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function addNewUsulan($data)
  {
      $usulan = new TrUsulan();
      //$usulan->setId
  }

}
?>