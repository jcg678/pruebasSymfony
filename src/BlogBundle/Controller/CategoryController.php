<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Category;
use BlogBundle\Form\CategoryType;
use Symfony\Component\HttpFoundation\Session\Session;
class CategoryController extends Controller
{
    private $session;
    public function __construct(){
        $this->session=new Session();

    }

    public function  indexAction(){
        $em = $this->getDoctrine()->getManager();
        $category_repo=$em->getRepository("BlogBundle:Category");
        $categories=$category_repo->findAll();
        return $this->render('BlogBundle:category:index.html.twig', [
            'categories' => $categories

        ]);
    }
    public function addAction(Request $request){
        $category = new Category();
        $form = $this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $category = new Category();
                $category->setName($form->get("name")->getData());
                $category->setDescription($form->get("description")->getData());
                $em->persist($category);
                $flush = $em->flush();
                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al añadir la categoria";
                }
            }else{
                $status = "La categoria  no se ha creado porque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
            return $this->redirectToRoute("blog_index_category");
        }


        return $this->render('BlogBundle:category:add.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $category_repo=$em->getRepository("BlogBundle:Category");
        $category=$category_repo->find($id);

        $control=count($category->getEntries());
        if($control==0) {
            $em->remove($category);
            $em->flush();
        }
        return $this->redirectToRoute("blog_index_category");

    }



    public function editAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $category_repo=$em->getRepository("BlogBundle:Category");
        $category=$category_repo->find($id);
        $form = $this->createForm(CategoryType::class,$category);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            if($form->isValid()){

                $category->setName($form->get("name")->getData());
                $category->setDescription($form->get("description")->getData());
                $em->persist($category);
                $flush = $em->flush();
                if($flush==null){
                    $status="Formulario valido";
                }else{
                    $status="Error al editar la categoria";
                }
            }else{
                $status = "La categoria  no se ha editado porque  hay fallos  !!";
            }
            $this->session->getFlashBag()->add("status",$status);
            return $this->redirectToRoute("blog_index_category");
        }


        return $this->render('BlogBundle:category:edit.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    public function categoryAction($id,$page){
        $em = $this->getDoctrine()->getManager();
        $category_repo=$em->getRepository("BlogBundle:Category");
        $category=$category_repo->find($id);
        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $entries=$entry_repo->getCategoryEntries($category,5,$page);
        $totalItems=count($entries);
        $pagesCount=ceil($totalItems/5);
        return $this->render(
            'BlogBundle:category:category.html.twig',[
                "category"=>$category,
                "categories"=>$category_repo->findAll(),
                "entries"=>$entries,
                "page"=>$page,
                "page_m"=>$page,
                "pagesCount"=>$pagesCount,
                'totalItems'=>$totalItems,


            ]
        );
    }
}
