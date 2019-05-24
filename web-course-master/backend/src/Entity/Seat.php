<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\SeatRepository")
 */
class Seat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $range_seat;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_seat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRangeSeat(): ?string
    {
        return $this->range_seat;
    }

    public function setRangeSeat(string $range_seat): self
    {
        $this->range_seat = $range_seat;

        return $this;
    }

    public function getNumberSeat(): ?int
    {
        return $this->number_seat;
    }

    public function setNumberSeat(int $number_seat): self
    {
        $this->number_seat = $number_seat;

        return $this;
    }
    

    /*public function load(ObjectManager $manager){
        for($i=1, $i<=31; $i++){
            $seat = new Seat();
            $seat->setRangeSeat('A');
            $seat->setNumberSeat($i);
            $manager->persist($seat);
        }

        $manager->flush();
    }*/

}


