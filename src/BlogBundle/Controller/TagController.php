<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Tag;
use BlogBundle\Form\TagType;
use Symfony\Component\HttpFoundation\Session\Session;
class TagController extends Controller
{
    private $session;
    public function __construct(){
        $this->session=new Session();

    }

    public function addAction(Request $request){
        $tag = new Tag();
        $form = $this->createForm(TagType::class,$tag);
        $status = "Creada correctamente";
        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){

                $status = "Creada correctamente";
            }else{
                $status = "La etiqueta no se ha creadoporque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
        }


        return $this->render('BlogBundle:tag:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    public function formAction(Request $request){
        $curso = new Curso();
        $form= $this->createForm(CursoType::class,$curso);
        $form->handleRequest($request);
        if($form->isValid()){
            $status="Formulario valido";
            $data = array(
                "titulo" => $form->get("titulo")->getData(),
                "descripcion" => $form->get("descripcion")->getData(),
                "precio" => $form->get("precio")->getData(),
            );
        }else{
            $status = null;
            $data = null;
        }
        return $this->render('AppBundle:pruebas:form.html.twig', [
            'form' => $form->createView(),
            'status' => $status,
            'data' => $data
        ]);
    }
}
