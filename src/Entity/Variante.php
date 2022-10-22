<?php

namespace App\Entity;

use App\Repository\VarianteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VarianteRepository::class)]
class Variante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomVariante = null;

    #[ORM\Column]
    private ?float $prixVariante = null;

    #[ORM\Column(nullable: true)]
    private ?float $prixPromoVariante = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $caraVariante = null;

    #[ORM\Column]
    private ?int $idModele = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVariante(): ?string
    {
        return $this->nomVariante;
    }

    public function setNomVariante(string $nomVariante): self
    {
        $this->nomVariante = $nomVariante;

        return $this;
    }

    public function getPrixVariante(): ?float
    {
        return $this->prixVariante;
    }

    public function setPrixVariante(float $prixVariante): self
    {
        $this->prixVariante = $prixVariante;

        return $this;
    }

    public function getPrixPromoVariante(): ?float
    {
        return $this->prixPromoVariante;
    }

    public function setPrixPromoVariante(?float $prixPromoVariante): self
    {
        $this->prixPromoVariante = $prixPromoVariante;

        return $this;
    }

    public function getCaraVariante(): ?string
    {
        return $this->caraVariante;
    }

    public function setCaraVariante(string $caraVariante): self
    {
        $this->caraVariante = $caraVariante;

        return $this;
    }

    public function getIdModele(): ?int
    {
        return $this->idModele;
    }

    public function setIdModele(int $idModele): self
    {
        $this->idModele = $idModele;

        return $this;
    }
}
