<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
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
}
