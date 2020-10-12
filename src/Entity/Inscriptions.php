<?php

namespace App\Entity;

use App\Repository\InscriptionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionsRepository::class)
 */
class Inscriptions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date_inscription;
    /**
     * @ORM\Column(type="integer", length=50, nullable=false)
     */
    private $sorties_no_sortie;
    /**
     * @ORM\Column(type="integer", length=50, nullable=false)
     */
    private $participants_no_participant;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->date_inscription;
    }

    /**
     * @param mixed $date_inscription
     */
    public function setDateInscription($date_inscription)
    {
        $this->date_inscription = $date_inscription;
    }

    /**
     * @return mixed
     */
    public function getSortiesNoSortie()
    {
        return $this->sorties_no_sortie;
    }

    /**
     * @param mixed $sorties_no_sortie
     */
    public function setSortiesNoSortie($sorties_no_sortie)
    {
        $this->sorties_no_sortie = $sorties_no_sortie;
    }

    /**
     * @return mixed
     */
    public function getParticipantsNoParticipant()
    {
        return $this->participants_no_participant;
    }

    /**
     * @param mixed $participants_no_participant
     */
    public function setParticipantsNoParticipant($participants_no_participant)
    {
        $this->participants_no_participant = $participants_no_participant;
    }
}
