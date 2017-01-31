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

    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $category_repo= $em->getRepository("BlogBundle:Category");
        $entries=$entry_repo->findAll();
        $categories=$category_repo->findAll();
        return $this->render("BlogBundle:entry:index.html.twig",[
                'entries'=>$entries,
                'categories'=>$categories
            ]

            );
    }

    public function addAction(Request $request){
        $entry = new Entry();
        $form = $this->createForm(EntryType::class,$entry);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $category_repo=$em->getRepository("BlogBundle:Category");
                $entry_repo=$em->getRepository("BlogBundle:Entry");
                $entry = new Entry();
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());


                $file=$form["image"]->getData();
                $ext=$file->guessExtension();
                $file_name=time().".".$ext;

                $file->move("uploads",$file_name);

                $entry->setImage($file_name);

                $category=$category_repo->find($form->get("category")->getData());
                $entry->setCategory($category);
                $user=$this->getUser();
                $entry->setUser($user);

                $em->persist($entry);

                $flush=$em->flush();

                $entry_repo-> saveEntryTags(
                    $form->get("tags")->getData(),
                    $form->get("title")->getData(),
                    $category,
                    $user,
                    $entry

                );

                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al añadir la entrada";
                }
            }else{
                $status = "La entrada  no se ha creado porque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
            return $this->redirectToRoute("blog_homepage");
        }


        return $this->render('BlogBundle:entry:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $entry_tags_repo=$em->getRepository("BlogBundle:EntryTag");


        $entry=$entry_repo->find($id);
        $entry_tags =$entry_tags_repo->findBy(array('entry'=>$entry));
        foreach($entry_tags as $entry_tag){
            $em->remove($entry_tag);
            $em->flush();
        }
        $em->remove($entry);
        $em->flush();
        return $this->redirectToRoute('blog_homepage');
    }

    public function editAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $category_repo=$em->getRepository("BlogBundle:Category");
        $entry=$entry_repo->find($id);
        $tags="";
        $total = $entry->getEntryTag();
        foreach($total as $entryTag){


                $tags.=$entryTag->getTag()->getName().",";


        }
        $tags = substr($tags, 0, -1);
        $form =$this->createForm(EntryType::class,$entry);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());


                $file=$form["image"]->getData();
                $ext=$file->guessExtension();
                $file_name=time().".".$ext;

                $file->move("uploads",$file_name);

                $entry->setImage($file_name);

                $category=$category_repo->find($form->get("category")->getData());
                $entry->setCategory($category);
                $user=$this->getUser();
                $entry->setUser($user);

                $em->persist($entry);

                $flush=$em->flush();

                $entry_tags_repo=$em->getRepository("BlogBundle:EntryTag");


                $entry=$entry_repo->find($id);
                $entry_tags =$entry_tags_repo->findBy(array('entry'=>$entry));
                foreach($entry_tags as $entry_tag){
                    $em->remove($entry_tag);
                    $em->flush();
                }

                $entry_repo-> saveEntryTags(
                    $form->get("tags")->getData(),
                    $form->get("title")->getData(),
                    $category,
                    $user,
                    $entry

                );
                if($flush ==null){
                    $status="la entrada se ha editado";
                }else{
                    $status = "No se ha editado";
                }
            }else{
                $status="El formulario no es valido";
            }
            $this->session->getFlashBag()->add("status",$status);
            return $this->redirectToRoute("blog_homepage");
        }
        return $this->render("BlogBundle:entry:edit.html.twig",[
           "form"=>$form->createView(),
            "entry"=>$entry,
            "tags"=>$tags
        ]);
    }

}
