<?php
declare(strict_types=1);

namespace Application\Controller;

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
                              ['idJenjangJabatanFungsional'=>'DESC','kode'=>'DESC']);
        
    // Render the view template
    return new ViewModel([
      'kegiatan' => $kegiatan
    ]);
  }

}

?>