<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function acceuil()
    {
        return $this->render("default/acceuil.html.twig");
    }
    /**
     * @Route("/", name="acceuil_default")
     */
    public function acceuilDefault()
    {
        return $this->render("default/acceuil.html.twig");
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render("default/connexion.html.twig");
    }
}
