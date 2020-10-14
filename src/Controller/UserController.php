<?php

namespace App\Controller;

use App\Entity\Participants;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{/**
 * @Route("/register", name="register")
 */
    public function register(Request $request,
                             EntityManagerInterface $em,
                             UserPasswordEncoderInterface $encoder)
    {
        $user = new Participants();

        $registerForm = $this->createForm(InscriptionType::class, $user);

        $registerForm->handleRequest($request);
        if($registerForm->isSubmitted() &&$registerForm->isValid()) {
            //hasher le mot de passe
            $hashed = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hashed);

            $em->persist($user);
            $em->flush();
        }
        return $this->render('user/register.html.twig', [
            "registerForm" => $registerForm->createView()
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('default/connexion.html.twig');
    }

    /**
     * Symfony gère entièrement cette route
     * @Route("/logout", name="logout")
     */
    public function logout(){}
}