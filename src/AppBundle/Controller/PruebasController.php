<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;

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
    
    public function addAction(){
        $curso = new Curso();
        $curso->setTitulo("Pruebas Symfony");
        $curso->setDescripcion("Curso ampliacion");
        $curso->setPrecio(60);
        $em = $this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush=$em->flush();
        if($flush != null){
            echo "El curso bo se ha creado bien";
        }else{
            echo "El curso se ha creado correctamente";
        }
        die();
    }
    
    public function readAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
       // $cursos = $cursos_repo->findAll();
        
       // $cursos = $cursos_repo->findBy(array("precio"=>"60"));//equivalente a where
        $cursos = $cursos_repo->findOneByPrecio("60");//el primero que vale 60
        dump($cursos);
        foreach($cursos as $curso){
            echo $curso->getTitulo()."<br>";
            echo $curso->getDescripcion()."<br>";
            echo $curso->getPrecio()."<br><hr>";
        }
        die();
    }
    
   public function updateAction($id, $titulo, $descripcion, $precio){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        $curso = $cursos_repo->find($id);
        $curso->setTitulo($titulo);
        $curso->setDescripcion($precio);
        $em->persist($curso);
        $flush=$em->flush();
        
        if($flush!=null){
            echo "El curso no se ha actulizado!!";
        }else{
            echo "El curso se ha actulizado correctamente";
        }
       die();
   } 
    
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        $curso = $cursos_repo->find($id);
        $em->remove($curso);
        $flush=$em->flush();
        
         if($flush!=null){
            echo "El curso no se ha borrado!!";
        }else{
            echo "El curso se ha borrado correctamente";
        }
       die();
    }
    public function nativeSqlAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo=$em->getRepository("AppBundle:Curso");
        
//        $query = $em->createQuery("
//            SELECT c FROM AppBundle:Curso c
//            WHERE c.precio > :precio
//            ")->setParameter("precio",20);
//        $cursos = $query->getResult();
//        $db = $em->getConnection();
//        $query = "select * from cursos";
//        $stmt = $db->prepare($query);
//        $params = array();
//        $stmt->execute($params);
//        $cursos = $stmt->fetchAll();
        $query = $cursos_repo->createQueryBuilder("c")
            ->where("c.precio > :precio")
            ->setParameter("precio","29")
            ->getQuery();
        $cursos =$query->getResult();
        foreach($cursos as $curso){
            echo $curso->getTitulo()."<br>";
            
        }
        die();
    }
    
}
