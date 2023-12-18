<?php

namespace App\Entity;

use App\Repository\TricksIdRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TricksIdRepository::class)]
class TricksId
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Tricks_Id = null;

    #[ORM\Column(length: 255)]
    private ?string $Tricks_Title = null;

    #[ORM\Column(length: 255)]
    private ?string $Tricks_SubTitle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Tricks_Video_URL = null;

    #[ORM\Column(length: 255)]
    private ?string $Tricks_Photo_URL = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Tricks_Date = null;

    #[ORM\Column]
    private ?int $Tricks_status = null;

    #[ORM\Column]
    private ?int $Tricks_User_Id = null;

    #[ORM\Column]
    private ?int $Tricks_Category_ID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTricksId(): ?int
    {
        return $this->Tricks_Id;
    }

    public function setTricksId(int $Tricks_Id): static
    {
        $this->Tricks_Id = $Tricks_Id;

        return $this;
    }

    public function getTricksTitle(): ?string
    {
        return $this->Tricks_Title;
    }

    public function setTricksTitle(string $Tricks_Title): static
    {
        $this->Tricks_Title = $Tricks_Title;

        return $this;
    }

    public function getTricksSubTitle(): ?string
    {
        return $this->Tricks_SubTitle;
    }

    public function setTricksSubTitle(string $Tricks_SubTitle): static
    {
        $this->Tricks_SubTitle = $Tricks_SubTitle;

        return $this;
    }

    public function getTricksVideoURL(): ?string
    {
        return $this->Tricks_Video_URL;
    }

    public function setTricksVideoURL(?string $Tricks_Video_URL): static
    {
        $this->Tricks_Video_URL = $Tricks_Video_URL;

        return $this;
    }

    public function getTricksPhotoURL(): ?string
    {
        return $this->Tricks_Photo_URL;
    }

    public function setTricksPhotoURL(string $Tricks_Photo_URL): static
    {
        $this->Tricks_Photo_URL = $Tricks_Photo_URL;

        return $this;
    }

    public function getTricksDate(): ?\DateTimeInterface
    {
        return $this->Tricks_Date;
    }

    public function setTricksDate(\DateTimeInterface $Tricks_Date): static
    {
        $this->Tricks_Date = $Tricks_Date;

        return $this;
    }

    public function getTricksStatus(): ?int
    {
        return $this->Tricks_status;
    }

    public function setTricksStatus(int $Tricks_status): static
    {
        $this->Tricks_status = $Tricks_status;

        return $this;
    }

    public function getTricksUserId(): ?int
    {
        return $this->Tricks_User_Id;
    }

    public function setTricksUserId(int $Tricks_User_Id): static
    {
        $this->Tricks_User_Id = $Tricks_User_Id;

        return $this;
    }

    public function getTricksCategoryID(): ?int
    {
        return $this->Tricks_Category_ID;
    }

    public function setTricksCategoryID(int $Tricks_Category_ID): static
    {
        $this->Tricks_Category_ID = $Tricks_Category_ID;

        return $this;
    }
}
