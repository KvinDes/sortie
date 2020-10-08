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
     * @ORM\Column(type="integer", length=3)
     */
    private $no_sortie;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;
    /**
     * @ORM\Column(type="datetime")
     */
    private $datedebut;

    private $duree;
    /**
     * @ORM\Column(type="datetime")
     */
    private $datecloture;
    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $nbinscriptionsmax;

    private $descriptioninfos;

    private $etatsortie;

    private $urlPhoto;

    private $organisateur;

    private $lieux_no_lieu;

    private $etats_no_etat;

    public function getId(): int
    {
        return $this->id;
    }

}
