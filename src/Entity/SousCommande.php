<?php

namespace App\Entity;

use App\Repository\SousCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCommandeRepository::class)]
class SousCommande
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'sousCommandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Variante $idVariante = null;
    
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'sousCommandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $idCommande = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getIdVariante(): ?Variante
    {
        return $this->idVariante;
    }

    public function getIdCommande(): ?Commande
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
