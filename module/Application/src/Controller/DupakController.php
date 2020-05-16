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
    
    public function persetujuanAction(){
        
    }

    public function pemeriksaanAction(){
        
    }

    public function penilaianAction(){
        
    }

    public function riwayatAction(){
        $vm = new ViewModel();
        return $vm;
    }
}
