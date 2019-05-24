<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PriceRepository")
 */
class Price
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount_price;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getAmountPrice(): ?float
    {
        return $this->amount_price;
    }

    public function setAmountPrice(?float $amount_price): self
    {
        $this->amount_price = $amount_price;

        return $this;
    }
}
