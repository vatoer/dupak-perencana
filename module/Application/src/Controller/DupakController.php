<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class DupakController extends AbstractActionController
{
    public function indexAction()
    {
        $vm = new ViewModel();

        $vm->setVariable('contentTitle','PAK');
        return $vm;
    }

    public function usulanAction(){
        $vm = new ViewModel();

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
