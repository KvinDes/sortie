<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    /**
     * @Route("/creerSortie", name="creerSortie")
     */
    public function creerSortie()
    {
        return $this->render('sortie/creerSortie.html.twig');
    }
    /**
     * @Route("/afficherSortie", name="afficherSortie")
     */
    public function afficherSortie()
    {
        return $this->render('sortie/afficherSortie.html.twig');
    }
    /**
     * @Route("/modifierSortie", name="modifierSortie")
     */
    public function modifierSortie()
    {
        return $this->render('sortie/modifierSortie.html.twig');
    }
    /**
     * @Route("/annulerSortie", name="annulerSortie")
     */
    public function annulerSortie()
    {
        return $this->render('sortie/annulerSortie.html.twig');
    }
}