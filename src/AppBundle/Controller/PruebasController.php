<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    
    public function indexAction(Request $request,$name,$page)
    {
        //return $this->redirect($this->generateUrl("homepage"));
        //return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/hello-world?prueba=true");
        return $this->redirect($request->getBaseUrl()."/hello-world?prueba=true");
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig', [
            'texto' => $name." - ".$page
        ]);
    }
    
    
    
}
