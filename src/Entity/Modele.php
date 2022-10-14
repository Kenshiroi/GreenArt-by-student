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
    private ?string $nom = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $quantiteStock = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $variante = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column]
    private ?float $pourcentageCreateur = null;

    #[ORM\ManyToOne(inversedBy: 'modeles')]
    private ?Createur $idCreateur = null;

    #[ORM\OneToMany(mappedBy: 'idModele', targetEntity: SousCommande::class)]
    private Collection $sousCommandes;

    public function __construct()
    {
        $this->sousCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantiteStock(): ?int
    {
        return $this->quantiteStock;
    }

    public function setQuantiteStock(?string $quantiteStock): self
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVariante(): ?string
    {
        return $this->variante;
    }

    public function setVariante(string $variante): self
    {
        $this->variante = $variante;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getPourcentageCreateur(): ?float
    {
        return $this->pourcentageCreateur;
    }

    public function setPourcentageCreateur(float $pourcentageCreateur): self
    {
        $this->pourcentageCreateur = $pourcentageCreateur;

        return $this;
    }

    public function getIdCreateur(): ?Createur
    {
        return $this->idCreateur;
    }

    public function setIdCreateur(?Createur $idCreateur): self
    {
        $this->idCreateur = $idCreateur;

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
            $sousCommande->setIdModele($this);
        }

        return $this;
    }

    public function removeSousCommande(SousCommande $sousCommande): self
    {
        if ($this->sousCommandes->removeElement($sousCommande)) {
            // set the owning side to null (unless already changed)
            if ($sousCommande->getIdModele() === $this) {
                $sousCommande->setIdModele(null);
            }
        }

        return $this;
    }
}
