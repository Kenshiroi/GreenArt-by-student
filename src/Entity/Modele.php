<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeleRepository::class)]
class Modele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomModele = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $imageModele = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionModele = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateAjout = null;

    #[ORM\OneToMany(mappedBy: 'idModele', targetEntity: Variante::class)]
    private Collection $variantes;

    #[ORM\OneToMany(mappedBy: 'idModele', targetEntity: CreePar::class)]
    private Collection $creePars;

    #[ORM\OneToMany(mappedBy: 'idModele', targetEntity: CommentaireModele::class)]
    private Collection $commentaireModeles;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $fichierModele = null;

    public function __construct()
    {
        $this->variantes = new ArrayCollection();
        $this->creePars = new ArrayCollection();
        $this->commentaireModeles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomModele(): ?string
    {
        return $this->nomModele;
    }

    public function setNomModele(string $nomModele): self
    {
        $this->nomModele = $nomModele;

        return $this;
    }

    public function getImageModele(): ?string
    {
        return $this->imageModele;
    }

    public function setImageModele(string $imageModele): self
    {
        $this->imageModele = $imageModele;

        return $this;
    }

    public function getDescriptionModele(): ?string
    {
        return $this->descriptionModele;
    }

    public function setDescriptionModele(string $descriptionModele): self
    {
        $this->descriptionModele = $descriptionModele;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * @return Collection<int, Variante>
     */
    public function getVariantes(): Collection
    {
        return $this->variantes;
    }

    public function addVariante(Variante $variante): self
    {
        if (!$this->variantes->contains($variante)) {
            $this->variantes->add($variante);
            $variante->setIdModele($this);
        }

        return $this;
    }

    public function removeVariante(Variante $variante): self
    {
        if ($this->variantes->removeElement($variante)) {
            // set the owning side to null (unless already changed)
            if ($variante->getIdModele() === $this) {
                $variante->setIdModele(null);
            }
        }

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
            $creePar->setIdModele($this);
        }

        return $this;
    }

    public function removeCreePar(CreePar $creePar): self
    {
        if ($this->creePars->removeElement($creePar)) {
            // set the owning side to null (unless already changed)
            if ($creePar->getIdModele() === $this) {
                $creePar->setIdModele(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CommentaireModele>
     */
    public function getCommentaireModeles(): Collection
    {
        return $this->commentaireModeles;
    }

    public function addCommentaireModele(CommentaireModele $commentaireModele): self
    {
        if (!$this->commentaireModeles->contains($commentaireModele)) {
            $this->commentaireModeles->add($commentaireModele);
            $commentaireModele->setIdModele($this);
        }

        return $this;
    }

    public function removeCommentaireModele(CommentaireModele $commentaireModele): self
    {
        if ($this->commentaireModeles->removeElement($commentaireModele)) {
            // set the owning side to null (unless already changed)
            if ($commentaireModele->getIdModele() === $this) {
                $commentaireModele->setIdModele(null);
            }
        }

        return $this;
    }

    public function getFichierModele(): ?string
    {
        return $this->fichierModele;
    }

    public function setFichierModele(string $fichierModele): self
    {
        $this->fichierModele = $fichierModele;

        return $this;
    }
}
