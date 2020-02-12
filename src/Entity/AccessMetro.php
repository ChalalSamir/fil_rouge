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
    private $nom_arret;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArret(): ?string
    {
        return $this->nom_arret;
    }

    public function setNomArret(string $nom_arret): self
    {
        $this->nom_arret = $nom_arret;

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
}
