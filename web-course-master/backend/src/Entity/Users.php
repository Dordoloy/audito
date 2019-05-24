<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Table(name="users")
 * @ApiResource(
 *     normalizationContext={"groups"={"user_read"}},
 *     itemOperations={
 *      "get",
 *      "delete",
 *      "put"
 *  }, collectionOperations={
 *      "get",
 *      "post"={"route_name"="api_users_post"}
 *  }),
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class Users extends  AbstractUser
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserType")
     */
    private $id_usertype;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"user_read"})
     */
    private $firstname_user;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname_user;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $phone_user;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type;


    public function getIdUsertype(): ?UserType
    {
        return $this->id_usertype;
    }

    public function setIdUsertype(?UserType $id_usertype): self
    {
        $this->id_usertype = $id_usertype;

        return $this;
    }

    public function getFirstnameUser(): ?string
    {
        return $this->firstname_user;
    }

    public function setFirstnameUser(string $firstname_user): self
    {
        $this->firstname_user = $firstname_user;

        return $this;
    }

    public function getLastnameUser(): ?string
    {
        return $this->lastname_user;
    }

    public function setLastnameUser(string $lastname_user): self
    {
        $this->lastname_user = $lastname_user;

        return $this;
    }

    public function getPhoneUser(): ?string
    {
        return $this->phone_user;
    }

    public function setPhoneUser(string $phone_user): self
    {
        $this->phone_user = $phone_user;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
