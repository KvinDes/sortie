<?php

namespace App\Entity;

use App\Repository\SortiesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="sortie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SOrtieRepository")
 */
class Sortie
{
    /**
     * @var int
     *
     * @ORM\Column(name="no_sortie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $noSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false, options={"default": "1000-01-01"})
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecloture", type="datetime", nullable=false, options={"default": "1000-01-01"})
     */
    private $dateCloture;

    /**
     * @var int
     *
     * @ORM\Column(name="nbinscriptionsmax", type="integer", nullable=false)
     */
    private $nbinscriptionsmax;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptioninfos", type="string", length=500)
     */
    private $descriptioninfos;

    /**
     * @var int
     *
     * @ORM\Column(name="etatsortie", type="integer", options={"default": 1})
     */
    private $etatsortie;

    /**
     * @var string
     *
     * @ORM\Column(name="urlPhoto", type="string", length=250)
     */
    private $urlPhoto;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Participants")
     * @ORM\JoinColumn(name="organisateur", referencedColumnName="no_participant", onDelete="CASCADE", nullable=false)
     */
    private $organisateur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lieux")
     * @ORM\JoinColumn(name="lieux_no_lieu", referencedColumnName="no_lieu", onDelete="CASCADE", nullable=false)
     */
    private $lieuxNoLieu;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Etats")
     * @ORM\JoinColumn(name="etats_no_etat", referencedColumnName="no_etat", onDelete="CASCADE", nullable=false)
     */
    private $etatsNoEtat;


    /*****Setter and Getter*****/
    /**
     * @return int
     */
    public function getNoSortie()
    {
        return $this->noSortie;
    }

    /**
     * @param int $noSortie
     */
    public function setNoSortie(int $noSortie)
    {
        $this->noSortie = $noSortie;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut(\DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param int $duree
     */
    public function setDuree(int $duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return \DateTime
     */
    public function getDateCloture()
    {
        return $this->dateCloture;
    }

    /**
     * @param \DateTime $dateCloture
     */
    public function setDateCloture(\DateTime $dateCloture)
    {
        $this->dateCloture = $dateCloture;
    }

    /**
     * @return int
     */
    public function getNbinscriptionsmax()
    {
        return $this->nbinscriptionsmax;
    }

    /**
     * @param int $nbinscriptionsmax
     */
    public function setNbinscriptionsmax(int $nbinscriptionsmax)
    {
        $this->nbinscriptionsmax = $nbinscriptionsmax;
    }

    /**
     * @return string
     */
    public function getDescriptioninfos()
    {
        return $this->descriptioninfos;
    }

    /**
     * @param string $descriptioninfos
     */
    public function setDescriptioninfos(string $descriptioninfos)
    {
        $this->descriptioninfos = $descriptioninfos;
    }

    /**
     * @return int
     */
    public function getEtatsortie()
    {
        return $this->etatsortie;
    }

    /**
     * @param int $etatsortie
     */
    public function setEtatsortie(int $etatsortie)
    {
        $this->etatsortie = $etatsortie;
    }

    /**
     * @return string
     */
    public function getUrlPhoto()
    {
        return $this->urlPhoto;
    }

    /**
     * @param string $urlPhoto
     */
    public function setUrlPhoto(string $urlPhoto)
    {
        $this->urlPhoto = $urlPhoto;
    }

    /**
     * @return Participants
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * @param mixed $organisateur
     */
    public function setOrganisateur(Participants $organisateur)
    {
        $this->organisateur = $organisateur;
    }

    /**
     * @return Lieux
     */
    public function getLieuxNoLieu()
    {
        return $this->lieuxNoLieu;
    }

    /**
     * @param mixed $lieuxNoLieu
     */
    public function setLieuxNoLieu(Lieux $lieuxNoLieu)
    {
        $this->lieuxNoLieu = $lieuxNoLieu;
    }

    /**
     * @return Etats
     */
    public function getEtatsNoEtat()
    {
        return $this->etatsNoEtat;
    }

    /**
     * @param mixed $etatsNoEtat
     */
    public function setEtatsNoEtat(Etats $etatsNoEtat)
    {
        $this->etatsNoEtat = $etatsNoEtat;
    }

}
