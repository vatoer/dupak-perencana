<?php
/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application\Controller;

use Application\Entity\Pegawai;
use Application\Service\UsulanManager;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class DupakController extends AbstractActionController
{
    /**
   * Entity manager.
   * @var Doctrine\ORM\EntityManager
   */
  private $entityManager;

  /**
   * @var UsulanManager
   */
  private $usulanManager;

  // Constructor method is used to inject dependencies to the controller.
  public function __construct($entityManager, UsulanManager $usulanManager) 
  {
    $this->entityManager = $entityManager;
    $this->usulanManager = $usulanManager;
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

            //$data = $this->getRequest()->fromPost();

            $data['pegawai'] = 'edae4594-9841-11ea-ba3d-acde48001122';
            $data['atasan'] = 'edb3c528-9841-11ea-ba3d-acde48001122';
            $data['pengusul'] = 'edb32352-9841-11ea-ba3d-acde48001122';
            $data['periode_mulai'] = '01-01-2020';
            $data['periode_akhir'] = '31-12-2020';
            
            $data = $this->usulanManager->addNewUsulan($data);


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
