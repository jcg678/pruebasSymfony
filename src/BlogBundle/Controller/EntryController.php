<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Entry;
use BlogBundle\Form\EntryType;
use Symfony\Component\HttpFoundation\Session\Session;
class EntryController extends Controller
{
    private $session;
    public function __construct(){
        $this->session=new Session();

    }


    public function addAction(Request $request){
        $entry = new Entry();
        $form = $this->createForm(EntryType::class,$entry);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
               /*
                $category = new Category();
                $category->setName($form->get("name")->getData());
                $category->setDescription($form->get("description")->getData());
                $em->persist($category);
                $flush = $em->flush();

                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al añadir la categoria";
                }*/
            }else{
                $status = "La categoria  no se ha creado porque  hay fallos  !!";
            }
           // $this->session->getFlashBag()->add("status",$status);
           // return $this->redirectToRoute("blog_index_category");
        }


        return $this->render('BlogBundle:entry:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }


}
