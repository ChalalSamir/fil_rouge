<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 *
 * @ApiFilter(SearchFilter::class, properties={"ufr": "exact"})
 * @ORM\Entity(repositoryClass="App\Repository\AccessMetroRepository")
 *
 */
class AccessMetro
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
     * @ORM\Column(type="integer")
     */
    private $ufr;

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
    private $ligne;

    /**
     * @ORM\Column(type="integer")
     */
    private $affluence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picto_type_transport;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picto_numero_ligne;

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
        $this->nom_arret = $nom;

        return $this;
    }

    public function getUfr(): ?int
    {
        return $this->ufr;
    }

    public function setUfr(int $ufr): self
    {
        $this->ufr = $ufr;

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

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(string $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getAffluence(): ?int
    {
        return $this->affluence;
    }

    public function setAffluence(int $affluence): self
    {
        $this->affluence = $affluence;

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

    public function getPictoNumeroLigne(): ?string
    {
        return $this->picto_numero_ligne;
    }

    public function setPictoNumeroLigne(string $picto_numero_ligne): self
    {
        $this->picto_numero_ligne = $picto_numero_ligne;

        return $this;
    }

}
