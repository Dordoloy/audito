<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=80)
     */
    private $name_event;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc_event;


    //-------------FOREIGNKEYS------------------------------------------

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizer")
     */
    private $id_organizer;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EventType")
     */
    private $id_eventtype;



    /**
     * @ORM\Column(type="integer")
     */
    private $roompatern_event;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgurl_event;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price_event;

    /**
     * @ORM\Column(type="date")
     */
    private $date_event;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $places_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration_event;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $enddate_event;

    


     //----------------------------------------------------------------

    public function __construct()
{
    $this->date = new ArrayCollection();
    $this->id_date = new ArrayCollection();
}

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getNameEvent(): ?string
    {
        return $this->name_event;
    }

    public function setNameEvent(string $name_event): self
    {
        $this->name_event = $name_event;

        return $this;
    }


    public function getDescEvent(): ?string
    {
        return $this->desc_event;
    }

    public function setDescEvent(string $desc_event): self
    {
        $this->desc_event = $desc_event;

        return $this;
    }


    public function getIdOrganizer(): ?Organizer
    {
        return $this->id_organizer;
    }

    public function setIdOrganizer(?Organizer $id_organizer): self
    {
        $this->id_organizer = $id_organizer;

        return $this;
    }


    public function getIdEventtype(): ?EventType
    {
        return $this->id_eventtype;
    }

    public function setIdEventtype(?EventType $id_eventtype): self
    {
        $this->id_eventtype = $id_eventtype;

        return $this;
    }


    public function getRoompaternEvent(): ?int
    {
        return $this->roompatern_event;
    }

    public function setRoompaternEvent(int $roompatern_event): self
    {
        $this->roompatern_event = $roompatern_event;

        return $this;
    }

    public function getImgurlEvent(): ?string
    {
        return $this->imgurl_event;
    }

    public function setImgurlEvent(?string $imgurl_event): self
    {
        $this->imgurl_event = $imgurl_event;

        return $this;
    }

    public function getPriceEvent(): ?float
    {
        return $this->price_event;
    }

    public function setPriceEvent(?float $price_event): self
    {
        $this->price_event = $price_event;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): self
    {
        $this->date_event = $date_event;

        return $this;
    }

    public function getPlacesEvent(): ?int
    {
        return $this->places_event;
    }

    public function setPlacesEvent(?int $places_event): self
    {
        $this->places_event = $places_event;

        return $this;
    }

    public function getDurationEvent(): ?int
    {
        return $this->duration_event;
    }

    public function setDurationEvent(int $duration_event): self
    {
        $this->duration_event = $duration_event;

        return $this;
    }

    public function getEnddateEvent(): ?\DateTimeInterface
    {
        return $this->enddate_event;
    }

    public function setEnddateEvent(?\DateTimeInterface $enddate_event): self
    {
        $this->enddate_event = $enddate_event;

        return $this;
    }


}
