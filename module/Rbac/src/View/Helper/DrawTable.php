<?php
/**
 * Created by PhpStorm.
 * User: Fathur Rohman
 * Date: 28/09/2018
 * Time: 8:58
 */

namespace Rbac\View\Helper;
use Laminas\View\Helper\AbstractHelper;

/**
 * Class DrawTable
 * @package Rbac\View\Helper
 */
class DrawTable extends AbstractHelper
{
    /**
     * @param array $array
     *  @param array $arrayField
     * @return string
     */
    public function __invoke(Array $array=null , Array $arrayField=null )
    {
        $tr = "";
        $current = current($array);
        foreach($array as $key => $value)
        {
            $tr.="<tr>";

            if(!empty($arrayField)){
                foreach($arrayField as $k){
                    $val = '';
                    if(!empty($k)){
                        $val = $value[$k];
                    }
                    $tr.='<td>'.$val.'</td>';
                }
            }else{
                foreach($value as $k => $v){
                    $tr.='<td>'.$v.'</td>';
                }
            }


            $tr.='</tr>';
        }
        return $tr;
    }
}