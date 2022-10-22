<?php

namespace App\Entity;

use App\Repository\CreeParRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CreeParRepository::class)]
class CreePar
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $idModele = null;
    
    #[ORM\Id]
    #[ORM\Column]
    private ?int $idCreateur = null;

    public function getIdModele(): ?int
    {
        return $this->idModele;
    }

    public function getIdCreateur(): ?int
    {
        return $this->idCreateur;
    }
}
