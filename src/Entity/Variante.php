<?php

namespace App\Entity;

use App\Entity\Modele;
use App\Repository\VarianteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'variantes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modele $idModele = null;

    #[ORM\OneToMany(mappedBy: 'idVariante', targetEntity: SousCommande::class)]
    private Collection $sousCommandes;

    public function __construct()
    {
        $this->sousCommandes = new ArrayCollection();
    }

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

    public function getIdModele(): ?string
    {
        if(is_null($this->idModele)){
            return $this->idModele; 
        }
        return $this->idModele->getId();
    }   

    public function setIdModele(?Modele $idModele): self
    {
        $this->idModele = $idModele;

        return $this;
    }

    /**
     * @return Collection<int, SousCommande>
     */
    public function getSousCommandes(): Collection
    {
        return $this->sousCommandes;
    }

    public function addSousCommande(SousCommande $sousCommande): self
    {
        if (!$this->sousCommandes->contains($sousCommande)) {
            $this->sousCommandes->add($sousCommande);
            $sousCommande->setIdVariante($this);
        }

        return $this;
    }

    public function removeSousCommande(SousCommande $sousCommande): self
    {
        if ($this->sousCommandes->removeElement($sousCommande)) {
            // set the owning side to null (unless already changed)
            if ($sousCommande->getIdVariante() === $this) {
                $sousCommande->setIdVariante(null);
            }
        }

        return $this;
    }
}
