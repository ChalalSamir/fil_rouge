<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccessBusRepository")
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 */
class AccessBus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=63, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $accessibilite_UFR;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $Ligne;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picto_type_transport;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $Nom_arret): self
    {
        $this->Nom_arret = $nom;

        return $this;
    }
    public function getDepartement(): ?int
    {
        return $this->departement;
    }

    public function setDepartement(?int $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
    public function getAccessibiliteUFR(): ?string
    {
        return $this->accessibilite_UFR;
    }

    public function setAccessibiliteUFR(?string $accessibilite_UFR): self
    {
        $this->accessibilite_UFR = $accessibilite_UFR;

        return $this;
    }
    public function getLigne(): ?string
    {
        return $this->Ligne;
    }

    public function setLigne(?string $Ligne): self
    {
        $this->Ligne = $Ligne;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getPicto(): ?string
    {
        return $this->picto;
    }

    public function setPicto(string $picto): self
    {
        $this->picto = $picto;

        return $this;
    }

    public function getPictoTypeTransport(): ?string
    {
        return $this->picto_type_transport;
    }

    public function setPictoTypeTransport(string $picto_type_transport): self
    {
        $this->picto_type_transport = $picto_type_transport;

        return $this;
    }
}
