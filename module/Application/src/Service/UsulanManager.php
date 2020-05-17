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
    $pegawai = $this->entityManager->getRepository(Pegawai::class)
    ->find($data['pegawai']);
    $atasan = $this->entityManager->getRepository(Pegawai::class)
    ->find($data['atasan']);
    $pengusul = $this->entityManager->getRepository(Pegawai::class)
    ->find($data['pengusul']);

    $usulan = new TrUsulan();
    $usulan->setFlagStatus('usulan');
    $usulan->setIdPegawai($pegawai);
    $usulan->setIdAtasan($atasan);
    $usulan->setIdPengusul($pengusul);

      //$usulan->setId
  }

}
?>