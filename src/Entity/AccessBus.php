<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccessBusRepository")
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
    private $Nom_arret;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code_insee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $departement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $X;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Y;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $accessibilite_UFR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annonce_sonore_prochain_passage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annonce_visuelle_prochain_passage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annonce_sonore_situations_perturbees;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annonce_visuelle_situations_perturbees;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $code_stif;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $coordonnees;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $Sens;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $Ligne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDPTAR(): ?int
    {
        return $this->IDPTAR;
    }

    public function setIDPTAR(?int $IDPTAR): self
    {
        $this->IDPTAR = $IDPTAR;

        return $this;
    }

    public function getNomArret(): ?string
    {
        return $this->Nom_arret;
    }

    public function setNomArret(?string $Nom_arret): self
    {
        $this->Nom_arret = $Nom_arret;

        return $this;
    }

    public function getCodeInsee(): ?int
    {
        return $this->code_insee;
    }

    public function setCodeInsee(?int $code_insee): self
    {
        $this->code_insee = $code_insee;

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

    public function getX(): ?int
    {
        return $this->X;
    }

    public function setX(?int $X): self
    {
        $this->X = $X;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->Y;
    }

    public function setY(?int $Y): self
    {
        $this->Y = $Y;

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

    public function getAnnonceSonoreProchainPassage(): ?int
    {
        return $this->annonce_sonore_prochain_passage;
    }

    public function setAnnonceSonoreProchainPassage(?int $annonce_sonore_prochain_passage): self
    {
        $this->annonce_sonore_prochain_passage = $annonce_sonore_prochain_passage;

        return $this;
    }

    public function getAnnonceVisuelleProchainPassage(): ?int
    {
        return $this->annonce_visuelle_prochain_passage;
    }

    public function setAnnonceVisuelleProchainPassage(?int $annonce_visuelle_prochain_passage): self
    {
        $this->annonce_visuelle_prochain_passage = $annonce_visuelle_prochain_passage;

        return $this;
    }

    public function getAnnonceSonoreSituationsPerturbees(): ?int
    {
        return $this->annonce_sonore_situations_perturbees;
    }

    public function setAnnonceSonoreSituationsPerturbees(?int $annonce_sonore_situations_perturbees): self
    {
        $this->annonce_sonore_situations_perturbees = $annonce_sonore_situations_perturbees;

        return $this;
    }

    public function getAnnonceVisuelleSituationsPerturbees(): ?int
    {
        return $this->annonce_visuelle_situations_perturbees;
    }

    public function setAnnonceVisuelleSituationsPerturbees(?int $annonce_visuelle_situations_perturbees): self
    {
        $this->annonce_visuelle_situations_perturbees = $annonce_visuelle_situations_perturbees;

        return $this;
    }

    public function getCodeStif(): ?string
    {
        return $this->code_stif;
    }

    public function setCodeStif(?string $code_stif): self
    {
        $this->code_stif = $code_stif;

        return $this;
    }

    public function getCoordonnees(): ?string
    {
        return $this->coordonnees;
    }

    public function setCoordonnees(?string $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    public function getSens(): ?string
    {
        return $this->Sens;
    }

    public function setSens(?string $Sens): self
    {
        $this->Sens = $Sens;

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
}
