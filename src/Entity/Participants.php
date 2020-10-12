<?php

namespace App\Entity;

use App\Repository\ParticipantsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=ParticipantsRepository::class)
 */
class Participants implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", length=10, nullable=false)
     */
    private $no_participant;
    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $pseudo;
    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telephone;
    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $mail;
    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $mot_de_passe;
    /**
     * @ORM\Column(type="binary", nullable=false)
     */
    private $administrateur;
    /**
     * @ORM\Column(type="binary", nullable=false)
     */
    private $actif;
    /**
     * @ORM\Column(type="integer", length=10, nullable=false)
     */
    private $campus_no_campus;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNoParticipant()
    {
        return $this->no_participant;
    }

    /**
     * @param mixed $no_participant
     */
    public function setNoParticipant($no_participant)
    {
        $this->no_participant = $no_participant;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getAdministrateur()
    {
        return $this->administrateur;
    }

    /**
     * @param mixed $administrateur
     */
    public function setAdministrateur($administrateur)
    {
        $this->administrateur = $administrateur;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    /**
     * @return mixed
     */
    public function getCampusNoCampus()
    {
        return $this->campus_no_campus;
    }

    /**
     * @param mixed $campus_no_campus
     */
    public function setCampusNoCampus($campus_no_campus)
    {
        $this->campus_no_campus = $campus_no_campus;
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
