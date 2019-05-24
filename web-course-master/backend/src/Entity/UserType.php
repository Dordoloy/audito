<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserTypeRepository")
 */
class UserType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $label_usertype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelUsertype(): ?string
    {
        return $this->label_usertype;
    }

    public function setLabelUsertype(string $label_usertype): self
    {
        $this->label_usertype = $label_usertype;

        return $this;
    }
}
