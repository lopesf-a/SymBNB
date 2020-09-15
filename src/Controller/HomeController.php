<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {


    /**
     * 
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello", name ="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * 
     * Montre la page qui dit bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig', 
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

    /**
     * @Route("/", name="homepage") 
     */    
    public function home(){
        $prenoms = ["Lior" => 5 , "Jean" => 17, "Joseph" => 99, "Anne" => 150];
            return $this->render(
                'home.html.twig',
                [ 
                    'title' => 'Hey, Tout le monde !!',
                    'title2' => 'Au revoir tout le monde !!',
                    'age' => 31,
                    'tableau' => $prenoms
                ]
            );
                
    }
}

?>