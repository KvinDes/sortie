<?php

namespace App\Entity;

use App\Repository\CampusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampusRepository", repositoryClass=CampusRepository::class)
 */
class Campus
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
    private $no_campus;
    /**
     * @ORM\Column(type="string", length=30, nullable=false)
     */
    private $nom_campus;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNoCampus()
    {
        return $this->no_campus;
    }

    /**
     * @param mixed $no_campus
     */
    public function setNoCampus($no_campus)
    {
        $this->no_campus = $no_campus;
    }

    /**
     * @return mixed
     */
    public function getNomCampus()
    {
        return $this->nom_campus;
    }

    /**
     * @param mixed $nom_campus
     */
    public function setNomCampus($nom_campus)
    {
        $this->nom_campus = $nom_campus;
    }

}
