<?php

namespace App\Entity;

use App\Repository\SousCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCommandeRepository::class)]
class SousCommande
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $idVariante = null;

    #[ORM\Id]
    #[ORM\Column]
    private ?int $idCommande = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getIdVariante(): ?int
    {
        return $this->idVariante;
    }

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
