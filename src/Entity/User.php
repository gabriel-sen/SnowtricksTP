<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $User_Id = null;

    #[ORM\Column(length: 255)]
    private ?string $User_Surname = null;

    #[ORM\Column(length: 255)]
    private ?string $User_FirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $User_Picture = null;

    #[ORM\Column(length: 255)]
    private ?string $User_Mail = null;

    #[ORM\Column(length: 255)]
    private ?string $User_Password = null;

    #[ORM\Column(nullable: true)]
    private ?int $User_Comment_Id = null;

    #[ORM\Column(nullable: true)]
    private ?int $User_Tricks_Id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->User_Id;
    }

    public function setUserId(int $User_Id): static
    {
        $this->User_Id = $User_Id;

        return $this;
    }

    public function getUserSurname(): ?string
    {
        return $this->User_Surname;
    }

    public function setUserSurname(string $User_Surname): static
    {
        $this->User_Surname = $User_Surname;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->User_FirstName;
    }

    public function setUserFirstName(string $User_FirstName): static
    {
        $this->User_FirstName = $User_FirstName;

        return $this;
    }

    public function getUserPicture(): ?string
    {
        return $this->User_Picture;
    }

    public function setUserPicture(string $User_Picture): static
    {
        $this->User_Picture = $User_Picture;

        return $this;
    }

    public function getUserMail(): ?string
    {
        return $this->User_Mail;
    }

    public function setUserMail(string $User_Mail): static
    {
        $this->User_Mail = $User_Mail;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->User_Password;
    }

    public function setUserPassword(string $User_Password): static
    {
        $this->User_Password = $User_Password;

        return $this;
    }

    public function getUserCommentId(): ?int
    {
        return $this->User_Comment_Id;
    }

    public function setUserCommentId(?int $User_Comment_Id): static
    {
        $this->User_Comment_Id = $User_Comment_Id;

        return $this;
    }

    public function getUserTricksId(): ?int
    {
        return $this->User_Tricks_Id;
    }

    public function setUserTricksId(?int $User_Tricks_Id): static
    {
        $this->User_Tricks_Id = $User_Tricks_Id;

        return $this;
    }
}
