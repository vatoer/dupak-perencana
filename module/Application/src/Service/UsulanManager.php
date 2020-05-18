<?php
namespace Application\Service;

use Application\Entity\TrUsulan;
use Laminas\Filter\StaticFilter;
use Application\Entity\Pegawai;
use Application\Entity\RefOrganisasi;

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

    $organisasi = $pegawai->getOrganisasi();
    //$organisasi = $this->entityManager->getRepository(RefOrganisasi::class)
    //->find($data['id_organisasi']);

    $periode_mulai = \DateTime::createFromFormat('d-m-Y', $data['periode_mulai']);
    $periode_akhir = \DateTime::createFromFormat('d-m-Y', $data['periode_akhir']);

    /*
    $data['periode_mulai'] = $periode_mulai;
    $data['periode_akhir'] = $periode_akhir;
    return $data;
    */

    $usulan = new TrUsulan();
    $usulan->setFlagStatus('usulan');
    $usulan->setFlowStatus('pegawai');
    $usulan->setIdPegawai($pegawai);
    $usulan->setIdOrganisasiPegawai($organisasi);
    $usulan->setPeriodeMulai($periode_mulai);
    $usulan->setPeriodeAkhir($periode_akhir);

    $usulan->setIdAtasan($atasan);
    $usulan->setIdPengusul($pengusul);

    // Add the entity to entity manager.
    $this->entityManager->persist($usulan);
        
    // Apply changes to database.
    $this->entityManager->flush();

    return $usulan;
  }

}
?>