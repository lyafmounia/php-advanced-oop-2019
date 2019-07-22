<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MusicienRepository")
 */
class Musicien
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idInstrument;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idGroupe;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdInstrument(): ?string
    {
        return $this->idInstrument;
    }

    public function setIdInstrument(string $idInstrument): self
    {
        $this->idInstrument = $idInstrument;

        return $this;
    }

    public function getIdGroupe(): ?string
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(string $idGroupe): self
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }
}
