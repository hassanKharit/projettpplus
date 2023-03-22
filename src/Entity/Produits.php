<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'Commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $titre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?user
    {
        return $this->titre;
    }

    public function setTitre(?user $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
