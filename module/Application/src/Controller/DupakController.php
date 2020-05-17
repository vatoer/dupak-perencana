<?php
/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application\Controller;

use Application\Entity\Pegawai;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class DupakController extends AbstractActionController
{
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

    public function indexAction()
    {
        $vm = new ViewModel();

        $vm->setVariable('contentTitle','PAK');
        return $vm;
    }

    public function usulanAction(){

        if($this->getRequest()->isPost()){
            echo 'abc';

            $data = $this->getRequest()->fromPost();

            

            $params = ['action'=>'usulan','a'=>232243];
            return $this->redirect()->toRoute('dupak',$params);        
        }

        

        $pegawai = $this->entityManager->getRepository(Pegawai::class)
        ->findAll();
        $vm = new ViewModel();
        $vm->setVariable('pegawai',$pegawai);
        $vm->setVariable('contentTitle','PAK');
        return $vm;
    }
    
    public function persetujuanAtasanAction(){
        $vm = new ViewModel();
        return $vm;
    }

    public function persetujuanUnitAction(){
        $vm = new ViewModel();
        return $vm;
    }

    public function pemeriksaanDokumenAction(){
        $vm = new ViewModel();
        return $vm;
    }

    public function penilaianAction(){
        $vm = new ViewModel();
        return $vm;
    }

    public function riwayatAction(){

        $usulan = [];

        $vm = new ViewModel();
        $vm->setVariable('usulan',$usulan);
        return $vm;
    }
}
