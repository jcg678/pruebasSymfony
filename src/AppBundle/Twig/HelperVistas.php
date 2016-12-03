<?php
namespace AppBundle\Twig;
class HelperVistas extends \Twig_Extension{
    
    public function getFunctions(){
        return array(
            'generateTable' => new \Twig_function_Method($this, 'generateTable')
        );
       
    }
    
    public function generateTable($num_columns,$num_rows){
        $table="<table class='table'>";
        for($i=0;$i<=$num_rows;$i++){
            $table.="<tr>";
            for($i=0;$i<=$num_columns; $i++){
                $table.="<td>Columna</td>";
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