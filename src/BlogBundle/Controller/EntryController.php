<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Entry;
use BlogBundle\Form\EntryType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
                $category_repo=$em->getRepository("BlogBundle:Category");
                $entry = new Entry();
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());


                $file=$form["image"]->getData();
                $ext=$file->guessExtension();
                $file_name=time().".".$ext;
                $file->move("uploads",$file_name);

                $entry->setImage($file_name);

                $categoria=$category_repo->find($form->get("category")->getData());
                $entry->setCategory($categoria);
                $user=$this->getUser();
                $entry->setUser($user);
                $em->persist($entry);
                $flush=$em->flush();
                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al añadir la categoria";
                }
            }else{
                $status = "La entrada  no se ha creado porque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
            //return $this->redirectToRoute("blog_index_category");
        }


        return $this->render('BlogBundle:entry:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }


}
