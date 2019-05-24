<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OrganizerRepository")
 */
class Organizer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $firstname_organizer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mail_organizer;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel_organizer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname_organizer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstnameOrganizer(): ?string
    {
        return $this->firstname_organizer;
    }

    public function setFirstnameOrganizer(string $firstname_organizer): self
    {
        $this->firstname_organizer = $firstname_organizer;

        return $this;
    }

    public function getMailOrganizer(): ?string
    {
        return $this->mail_organizer;
    }

    public function setMailOrganizer(string $mail_organizer): self
    {
        $this->mail_organizer = $mail_organizer;

        return $this;
    }

    public function getTelOrganizer(): ?string
    {
        return $this->tel_organizer;
    }

    public function setTelOrganizer(string $tel_organizer): self
    {
        $this->tel_organizer = $tel_organizer;

        return $this;
    }

    public function getLastnameOrganizer(): ?string
    {
        return $this->lastname_organizer;
    }

    public function setLastnameOrganizer(string $lastname_organizer): self
    {
        $this->lastname_organizer = $lastname_organizer;

        return $this;
    }
}
