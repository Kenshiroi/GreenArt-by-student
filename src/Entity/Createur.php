<?php

namespace App\Entity;

use App\Repository\CreateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CreateurRepository::class)]
class Createur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomCreateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCreateur(): ?string
    {
        return $this->nomCreateur;
    }

    public function setNomCreateur(string $nomCreateur): self
    {
        $this->nomCreateur = $nomCreateur;

        return $this;
    }
}
