<?php

namespace App\Entity;

use App\Repository\CreateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'idCreateur', targetEntity: CreePar::class)]
    private Collection $creePars;

    public function __construct()
    {
        $this->creePars = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, CreePar>
     */
    public function getCreePars(): Collection
    {
        return $this->creePars;
    }

    public function addCreePar(CreePar $creePar): self
    {
        if (!$this->creePars->contains($creePar)) {
            $this->creePars->add($creePar);
            $creePar->setIdCreateur($this);
        }

        return $this;
    }

    public function removeCreePar(CreePar $creePar): self
    {
        if ($this->creePars->removeElement($creePar)) {
            // set the owning side to null (unless already changed)
            if ($creePar->getIdCreateur() === $this) {
                $creePar->setIdCreateur(null);
            }
        }

        return $this;
    }
}
