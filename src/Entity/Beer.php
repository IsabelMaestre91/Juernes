<?php

namespace App\Entity;

use App\Repository\BeerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BeerRepository::class)]
class Beer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    private ?string $name = null;
    #[ORM\Column]
    private ?int $price = null;
    #[ORM\Column(length:255)]
    private ?string $type = null;
    #[ORM\Column]
    private ?int $intensity = null;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getPrice(): ?int
    {
        return $this->price;
    }
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    public function getType(): ?int
    {
        return $this->type;
    }
    public function setType(int $type): void
    {
        $this->type = $type;
    }
    public function getIntensity(): ?int
    {
        return $this->intensity;
    }
    public function setIntensity(int $intensity): void
    {
        $this->intensity = $intensity;
    }
}