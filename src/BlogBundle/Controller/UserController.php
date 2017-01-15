<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\User;
use BlogBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;
class UserController extends Controller
{
    private $session;
    public function __construct(){
        $this->session=new Session();

    }

    public function loginAction(Request $request){
        $authenticacionUtils = $this->get("security.authentication_utils");
        $error= $authenticacionUtils->getLastAuthenticationError();
        $lastUsername = $authenticacionUtils->getLastUsername();

        $user = new User();
        $form= $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()){
        if($form->isValid()){
            $status="El usuairo se ha creado correctamente";
            $user = new User();
            $name = $form->get("name")->getData();
            $user->setName($name);
            $user->setSurname($form->get("surname")->getData());
            $user->setEmail($form->get("email")->getData());
            $user->setPassword($form->get("password")->getData());
            $user->setRole("ROLE_USER");
            $user->setImagen(null);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $flush= $em->flush();
            if($flush == null){
                $status ="El usuario se ha creado correctamente";
            }else{
                $status ="Usuario no creado";
            }

        }else{
            $status = "No te has registrado correctamente";

        }
        $this->session->getFlashBag()->add("status",$status);

        };
        return $this->render('BlogBundle:user:login.html.twig', array(
            "error"=> $error,
            "lastUsername" => $lastUsername,
            "form" => $form->createView()
        ));
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
