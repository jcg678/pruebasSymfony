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

    public function  indexAction(){
        $em = $this->getDoctrine()->getManager();
        $tag_repo=$em->getRepository("BlogBundle:Tag");
        $tags=$tag_repo->findAll();
        return $this->render('BlogBundle:tag:index.html.twig', [
            'tags' => $tags

        ]);
    }
    public function addAction(Request $request){
        $tag = new Tag();
        $form = $this->createForm(TagType::class,$tag);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $tag = new Tag();
                $tag->setName($form->get("name")->getData());
                $tag->setDescription($form->get("description")->getData());
                $em->persist($tag);
                $flush = $em->flush();
                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al añadir la etiqueta";
                }
            }else{
                $status = "La etiqueta no se ha creadoporque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
            return $this->redirectToRoute("blog_index_tag");
        }


        return $this->render('BlogBundle:tag:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $tag_repo=$em->getRepository("BlogBundle:Tag");
        $tag=$tag_repo->find($id);
        $control=count($tag->getEntryTag());
        if($control==0){
            $em->remove($tag);
            $em->flush();
        }

        return $this->redirectToRoute("blog_index_tag");

    }

    public function formAction(Request $request){
        $curso = new Curso();
        $form= $this->createForm(CursoType::class,$curso);
        $form->handleRequest($request);
        if($form->isValid()){



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
