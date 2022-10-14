<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idUser = null;

    #[ORM\Column]
    private ?float $prixtotal = null;

    #[ORM\OneToMany(mappedBy: 'idCommande', targetEntity: SousCommande::class)]
    private Collection $sousCommandes;

    public function __construct()
    {
        $this->sousCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getPrixtotal(): ?float
    {
        return $this->prixtotal;
    }

    public function setPrixtotal(float $prixtotal): self
    {
        $this->prixtotal = $prixtotal;

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
            $sousCommande->setIdCommande($this);
        }

        return $this;
    }

    public function removeSousCommande(SousCommande $sousCommande): self
    {
        if ($this->sousCommandes->removeElement($sousCommande)) {
            // set the owning side to null (unless already changed)
            if ($sousCommande->getIdCommande() === $this) {
                $sousCommande->setIdCommande(null);
            }
        }

        return $this;
    }
}
