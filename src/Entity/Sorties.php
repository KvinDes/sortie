<?php

namespace App\Entity;

use App\Repository\SortiesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SortiesRepository::class)
 */
class Sorties
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $no_sortie;
    /**
     * @ORM\Column(type="string", length=30,)
     */
    private $nom;
    /**
     * @ORM\Column(type="datetime")
     */
    private $datedebut;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $duree;
    /**
     * @ORM\Column(type="datetime")
     */
    private $datecloture;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $nbinscriptionsmax;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $descriptioninfos;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $etatsortie;
    /**
     * @ORM\Column(type="string", length=250)
     */
    private $urlPhoto;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $organisateur;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $lieux_no_lieu;
    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $etats_no_etat;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNoSortie()
    {
        return $this->no_sortie;
    }

    /**
     * @param mixed $no_sortie
     */
    public function setNoSortie($no_sortie)
    {
        $this->no_sortie = $no_sortie;
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
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param mixed $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getDatecloture()
    {
        return $this->datecloture;
    }

    /**
     * @param mixed $datecloture
     */
    public function setDatecloture($datecloture)
    {
        $this->datecloture = $datecloture;
    }

    /**
     * @return mixed
     */
    public function getNbinscriptionsmax()
    {
        return $this->nbinscriptionsmax;
    }

    /**
     * @param mixed $nbinscriptionsmax
     */
    public function setNbinscriptionsmax($nbinscriptionsmax)
    {
        $this->nbinscriptionsmax = $nbinscriptionsmax;
    }

    /**
     * @return mixed
     */
    public function getDescriptioninfos()
    {
        return $this->descriptioninfos;
    }

    /**
     * @param mixed $descriptioninfos
     */
    public function setDescriptioninfos($descriptioninfos)
    {
        $this->descriptioninfos = $descriptioninfos;
    }

    /**
     * @return mixed
     */
    public function getEtatsortie()
    {
        return $this->etatsortie;
    }

    /**
     * @param mixed $etatsortie
     */
    public function setEtatsortie($etatsortie)
    {
        $this->etatsortie = $etatsortie;
    }

    /**
     * @return mixed
     */
    public function getUrlPhoto()
    {
        return $this->urlPhoto;
    }

    /**
     * @param mixed $urlPhoto
     */
    public function setUrlPhoto($urlPhoto)
    {
        $this->urlPhoto = $urlPhoto;
    }

    /**
     * @return mixed
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * @param mixed $organisateur
     */
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;
    }

    /**
     * @return mixed
     */
    public function getLieuxNoLieu()
    {
        return $this->lieux_no_lieu;
    }

    /**
     * @param mixed $lieux_no_lieu
     */
    public function setLieuxNoLieu($lieux_no_lieu)
    {
        $this->lieux_no_lieu = $lieux_no_lieu;
    }

    /**
     * @return mixed
     */
    public function getEtatsNoEtat()
    {
        return $this->etats_no_etat;
    }

    /**
     * @param mixed $etats_no_etat
     */
    public function setEtatsNoEtat($etats_no_etat)
    {
        $this->etats_no_etat = $etats_no_etat;
    }

}
