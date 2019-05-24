<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EventTypeRepository")
 */
class EventType
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
    private $label_eventtype;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getLabelEventtype(): ?string
    {
        return $this->label_eventtype;
    }

    public function setLabelEventtype(string $label_eventtype): self
    {
        $this->label_eventtype = $label_eventtype;

        return $this;
    }
}
