<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product_title = null;

    #[ORM\Column(length: 255)]
    private ?string $product_description = null;

    #[ORM\Column(length: 255)]
    private ?string $product_keyword = null;

    #[ORM\Column(length: 100)]
    private ?string $product_image = null;

    #[ORM\Column(length: 255)]
    private ?string $product_price = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductTitle(): ?string
    {
        return $this->product_title;
    }

    public function setProductTitle(string $product_title): self
    {
        $this->product_title = $product_title;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }

    public function getProductKeyword(): ?string
    {
        return $this->product_keyword;
    }

    public function setProductKeyword(string $product_keyword): self
    {
        $this->product_keyword = $product_keyword;

        return $this;
    }

    public function getProductImage(): ?string
    {
        return $this->product_image;
    }

    public function setProductImage(string $product_image): self
    {
        $this->product_image = $product_image;

        return $this;
    }

    public function getProductPrice(): ?string
    {
        return $this->product_price;
    }

    public function setProductPrice(string $product_price): self
    {
        $this->product_price = $product_price;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
