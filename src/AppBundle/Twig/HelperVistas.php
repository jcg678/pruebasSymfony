<?php
namespace AppBundle\Twig;
class HelperVistas extends \Twig_Extension{
    
    public function getFunctions(){
        return array(
            'generateTable' => new \Twig_Function_Method($this, 'generateTable')
        );
       
    }
    
    public function generateTable($array,$border){
        $table="<table class='table' border=".$border." >";
        for($i=0;$i<count($array);$i++){
            $table.="<tr>";
            for($x=0;$x<count($array[$i]); $x++){
                //convierte el array asociativo a valor
                $array_res= array_values($array[$i]);
                $table.="<td>".$array_res[$x]."</td>";
            }
            $table.="</tr>";
        }
        $table.="</table>";
        return $table;
    }
    
    
    public function getName(){
        return "app_bundle";
    }
}