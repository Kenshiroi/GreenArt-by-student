<?php

namespace App\Entity;

use App\Repository\CommentaireModeleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireModeleRepository::class)]
class CommentaireModele
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'commentaireModeles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modele $idModele = null;
    
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'commentaireModeles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $idUser = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $textCommentaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCommentaire = null;

    public function getIdModele(): ?Modele
    {
        return $this->idModele;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->textCommentaire;
    }

    public function setTextCommentaire(string $textCommentaire): self
    {
        $this->textCommentaire = $textCommentaire;

        return $this;
    }

    public function getDateCommentaire(): ?\DateTimeInterface
    {
        return $this->dateCommentaire;
    }

    public function setDateCommentaire(\DateTimeInterface $dateCommentaire): self
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }
}
