<?php

namespace App\Entity;

use App\Repository\CommentaireModeleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireModeleRepository::class)]
class CommentaireModele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idModele = null;

    #[ORM\Column]
    private ?int $idUser = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $textCommentaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCommentaire = null;

    public function getIdModele(): ?int
    {
        return $this->idModele;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
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
