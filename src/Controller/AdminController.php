<?php

namespace App\Controller;

use App\Form\VilleType;
use App\Repository\VillesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    /**
     * @Route("/ville/{id}", name="villeModifier")
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function villeModifier(Request $request, EntityManagerInterface $em, VillesRepository $villesRepository, int $id, $villeForm)
    {
        $ville = $villesRepository->findOneBy(['id' => $id]);
        $villeForm->$this->createForm(VilleType::class, $ville);
        $villeForm->handleRequest($request);

        if ($villeForm->isSubmitted() && $villeForm->isValid()) {
            $em->persist($ville);
            $em->flush();

            $this->addFlash('success', 'Modification éffectué');
            return $this->redirectToRoute('villes');
        } else {
            return $this->render('admin/villeModifier.html.twig',
                ["villeForm" => $villeForm->createView()
                ]);
        }
    }

    /**
     * @Route("/ville/{id}", name="villeModifier")
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function supprimerVille(Request $request, EntityManagerInterface $em, VillesRepository $villeRepository, int $id)
    {
        $ville = $villeRepository->findOneBy(['id' => $id]);
        $em->remove($ville);
        $em->flush();

        $this->addFlash('success', 'supression effectué');
        return $this->redirectToRoute('villes');
    }
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
