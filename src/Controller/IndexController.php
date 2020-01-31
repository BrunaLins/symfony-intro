<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * page à la racine du nom de domaine
     * @Route("/")
     *
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * localhost: 8000/hello
     *
     * URL de la page
     * @Route("/hello")
     */
    public function hello()
    {
      // rendu du fichier qui construit le html contenu dans la page.
        // chemin à partir de la racine du répertoire templates
      return $this->render('index/hello.html.twig');
    }

    /**
     * @Route("/bonjour/{qui}")
     */
    public function bonjour($qui)
    {
        // echo $qui;

        return $this->render(
            'index/bonjour.html.twig',
            [
                'nom' => $qui
            ]
        );
    }

    /**
     * @Route("/salut/{qui}",defaults={"qui": "à toi"})
     */
    public function salut($qui)
    {
        return $this->render('index/salut.html.twig',
        [
            'qui' =>$qui
        ]
        );
    }
}
