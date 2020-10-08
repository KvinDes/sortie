<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    /**
     * @Route("/campus", name="campus")
     */
    public function campus()
    {
        return $this->render('admin/campus.html.twig');
    }
    /**
     * @Route("/ville", name="ville")
     */
    public function ville()
    {
        return $this->render('admin/ville.html.twig');
    }
}
