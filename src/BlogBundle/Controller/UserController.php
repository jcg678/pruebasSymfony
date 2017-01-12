<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{


    public function loginAction(Request $request){
        $authenticacionUtils = $this->get("security.authentication_utils");
        $error= $authenticacionUtils->getLastAuthenticationError();
        $lastUsername = $authenticacionUtils->getLastUsername();

        return $this->render('BlogBundle:user:login.html.twig', array(
            "error"=> $error,
            "lastUsername" => $lastUsername
        ));
    }
}
