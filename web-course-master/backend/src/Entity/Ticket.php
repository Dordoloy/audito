<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event")
     */
    private $id_event;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price_ticket;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Seat", cascade={"persist", "remove"})
     */
    private $id_seat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvent(): ?Event
    {
        return $this->id_event;
    }

    public function setIdEvent(?Event $id_event): self
    {
        $this->id_event = $id_event;

        return $this;
    }

    public function getPriceTicket(): ?float
    {
        return $this->price_ticket;
    }

    public function setPriceTicket(?float $price_ticket): self
    {
        $this->price_ticket = $price_ticket;

        return $this;
    }

    public function getIdSeat(): ?Seat
    {
        return $this->id_seat;
    }

    public function setIdSeat(?Seat $id_seat): self
    {
        $this->id_seat = $id_seat;

        return $this;
    }
}
