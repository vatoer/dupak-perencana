<?php
declare(strict_types=1);

namespace Application\Controller;

use Application\Entity\Pegawai;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Entity\RefButirKegiatan;

class ReferenceController extends AbstractActionController{
    /**
   * Entity manager.
   * @var Doctrine\ORM\EntityManager
   */
  private $entityManager;

  // Constructor method is used to inject dependencies to the controller.
  public function __construct($entityManager) 
  {
    $this->entityManager = $entityManager;
  }

  // This is the default "index" action of the controller. It displays the 
  // Posts page containing the recent blog posts.
  public function indexAction() 
  {
    // Get recent posts
    $kegiatan = $this->entityManager->getRepository(RefButirKegiatan::class)
                     ->findBy([], 
                              ['idJenjangJabatanFungsional'=>'DESC','kode'=>'ASC']);
        
    // Render the view template
    return new ViewModel([
      'kegiatan' => $kegiatan
    ]);
  }

  public function butirKegiatanAction() 
  {
    // Get recent posts
    $kegiatan = $this->entityManager->getRepository(RefButirKegiatan::class)
                     ->findBy([], 
                              ['idJenjangJabatanFungsional'=>'DESC','kode'=>'ASC']);
        
    // Render the view template
    return new ViewModel([
      'kegiatan' => $kegiatan
    ]);
  }

  public function organisasiAction() 
  {
      $vm = new ViewModel();
      return $vm;
  }
  public function formasiAction() 
  {
      $vm = new ViewModel();
      return $vm;
  }

  public function jenjangJabatanFungsionalAction() 
  {
      $vm = new ViewModel();
      return $vm;
  }

  public function jabatanFungsionalAction() 
  {
      $vm = new ViewModel();
      return $vm;
  }

  public function pegawaiAction() 
  {

    $pegawai = $this->entityManager->getRepository(Pegawai::class)
    ->findAll();
      $vm = new ViewModel();
      $vm->setVariable('pegawai',$pegawai);
      return $vm;
  }

}

?>