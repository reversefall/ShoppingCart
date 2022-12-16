<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $category_title = null;

    #[ORM\Column(length: 255)]
    private ?string $brand_title = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryTitle(): ?string
    {
        return $this->category_title;
    }

    public function setCategoryTitle(string $category_title): self
    {
        $this->category_title = $category_title;

        return $this;
    }

    public function getBrandTitle(): ?string
    {
        return $this->brand_title;
    }

    public function setBrandTitle(string $brand_title): self
    {
        $this->brand_title = $brand_title;

        return $this;
    }
}
