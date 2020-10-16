<?php

namespace App\Entity;

use src\Repository\CampusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Campus
 *
 * @ORM\Table(name="campus")
 * @ORM\Entity(repositoryClass="CampusRepository")
 */
class Campus
{
    /**
     * @var int
     *
     * @ORM\Column(name="no_campus", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $noCampus;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_campus", type="string", length=30, nullable=false)
     */
    private $nomCampus;

    /*****Setter and Getter*****/
    /**
     * @return int
     */
    public function getNoCampus() : int
    {
        return $this->noCampus;
    }

    /**
     * @param int $noCampus
     */
    public function setNoCampus($noCampus) : Campus
    {
        $this->noCampus = $noCampus;
    }

    /**
     * @return string
     */
    public function getNomCampus() : string
    {
        return $this->nomCampus;
    }

    /**
     * @param string $nomCampus
     */
    public function setNomCampus($nomCampus) : Campus
    {
        $this->nomCampus = $nomCampus;
    }
}
