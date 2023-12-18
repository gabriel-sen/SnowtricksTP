<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Category_Id = null;

    #[ORM\Column(length: 255)]
    private ?string $Category_Title = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->Category_Id;
    }

    public function setCategoryId(int $Category_Id): static
    {
        $this->Category_Id = $Category_Id;

        return $this;
    }

    public function getCategoryTitle(): ?string
    {
        return $this->Category_Title;
    }

    public function setCategoryTitle(string $Category_Title): static
    {
        $this->Category_Title = $Category_Title;

        return $this;
    }
}
