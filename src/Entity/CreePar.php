<?php

namespace App\Entity;

use App\Repository\CreeParRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CreeParRepository::class)]
class CreePar
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'creePars')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modele $idModele = null;
    
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'creePars')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Createur $idCreateur = null;

    public function getIdModele(): ?Modele
    {
        return $this->idModele;
    }

    public function getIdCreateur(): ?Createur
    {
        return $this->idCreateur;
    }
}
