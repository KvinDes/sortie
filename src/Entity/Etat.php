<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtatRepository::class)
 */
class Etat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", length=5, nullable=false)
     */
    private $no_etat;
    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $libelle;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNoEtat()
    {
        return $this->no_etat;
    }

    /**
     * @param mixed $no_etat
     */
    public function setNoEtat($no_etat)
    {
        $this->no_etat = $no_etat;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
