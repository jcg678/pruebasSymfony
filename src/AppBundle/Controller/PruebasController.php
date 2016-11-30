<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    
    public function indexAction(Request $request,$name,$page)
    {
       
        //return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/hello-world?prueba=true");
        
        $productos = array(
                    array("producto"=>"Consola 1","precio"=>2),
                    array("producto"=>"Consola 2","precio"=>23),
                    array("producto"=>"Consola 3","precio"=>24),
                    array("producto"=>"Consola 4","precio"=>25),
                    array("producto"=>"Consola 5","precio"=>26),
                        );
        $fruta=array(
        "manzana"=>"golden",
        "pera"=>"rica"
        
        );
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig', [
            'texto' => $name." - ".$page,
            'productos'=> $productos,
            'fruta'=> $fruta
        ]);
    }
    
    
    
}
