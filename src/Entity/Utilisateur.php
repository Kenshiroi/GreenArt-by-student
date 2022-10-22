<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudoUser = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $imageUser = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $passwordUser = null;

    #[ORM\Column(length: 255)]
    private ?string $mailUser = null;

    #[ORM\Column]
    private ?bool $confirmUser = null;

    #[ORM\Column]
    private ?int $rightUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudoUser;
    }

    public function setPseudoUser(string $pseudoUser): self
    {
        $this->pseudoUser = $pseudoUser;

        return $this;
    }

    public function getImageUser(): ?string
    {
        return $this->imageUser;
    }

    public function setImageUser(?string $imageUser): self
    {
        $this->imageUser = $imageUser;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): self
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getMailUser(): ?string
    {
        return $this->mailUser;
    }

    public function setMailUser(string $mailUser): self
    {
        $this->mailUser = $mailUser;

        return $this;
    }

    public function isConfirmUser(): ?bool
    {
        return $this->confirmUser;
    }

    public function setConfirmUser(bool $confirmUser): self
    {
        $this->confirmUser = $confirmUser;

        return $this;
    }

    public function getRightUser(): ?int
    {
        return $this->rightUser;
    }

    public function setRightUser(int $rightUser): self
    {
        $this->rightUser = $rightUser;

        return $this;
    }
}
