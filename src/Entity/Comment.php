<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Comment_Id = null;

    #[ORM\Column(length: 255)]
    private ?string $Comment_text = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Comment_Date = null;

    #[ORM\Column]
    private ?int $Comment_status = null;

    #[ORM\Column]
    private ?int $Comment_User_Id = null;

    #[ORM\Column]
    private ?int $Comment_Tricks_Id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentId(): ?int
    {
        return $this->Comment_Id;
    }

    public function setCommentId(int $Comment_Id): static
    {
        $this->Comment_Id = $Comment_Id;

        return $this;
    }

    public function getCommentText(): ?string
    {
        return $this->Comment_text;
    }

    public function setCommentText(string $Comment_text): static
    {
        $this->Comment_text = $Comment_text;

        return $this;
    }

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->Comment_Date;
    }

    public function setCommentDate(\DateTimeInterface $Comment_Date): static
    {
        $this->Comment_Date = $Comment_Date;

        return $this;
    }

    public function getCommentStatus(): ?int
    {
        return $this->Comment_status;
    }

    public function setCommentStatus(int $Comment_status): static
    {
        $this->Comment_status = $Comment_status;

        return $this;
    }

    public function getCommentUserId(): ?int
    {
        return $this->Comment_User_Id;
    }

    public function setCommentUserId(int $Comment_User_Id): static
    {
        $this->Comment_User_Id = $Comment_User_Id;

        return $this;
    }

    public function getCommentTricksId(): ?int
    {
        return $this->Comment_Tricks_Id;
    }

    public function setCommentTricksId(int $Comment_Tricks_Id): static
    {
        $this->Comment_Tricks_Id = $Comment_Tricks_Id;

        return $this;
    }
}
