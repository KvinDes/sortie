<?php

namespace App\Controller;


use App\Entity\Etat;
use App\Entity\Participants;
use App\Entity\Sortie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SortieController extends Controller
{
    public function CreateSortieAction(Request $request) : Response
    {
        $sortie = new Sortie();
        $logger = $this->get('logger');
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(SortieCreateType::class, $sortie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $em->getRepository(Participants::class)->find(1);
            $etat = $em->getRepository(Etat::class)->find(1);

            $sortie->setLieuxNoLieu($form->get('lieuxNoLieu')->getData());
            $sortie ->setEtatsNoEtat($etat);
            $sortie->setOrganisateur($user);
            $sortie->setEtatsortie(1);

            $em->persist($sortie);
            $em->flush();

            //$this->addFlash('notice', $this->get('translator')->trans('merchant.flash.registered'));
            return $this->redirectToRoute('app_show_sorties');
        }

        return $this->render('sortie/create_sortie.html.twig', array('form' => $form->createView()));
    }

    public function EditSortieAction(){

    }

    public function DeleteSortieAction(){

    }

    public function UpdateSortieAction(){

    }

    public function ShowSortiesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sorties = $em->getRepository(Sortie::class)->findAll();
        var_dump($sorties);die;
        return $this->render(
            'default/dashbord.html.twig', array('sorties' => $sorties)
        );
    }
}