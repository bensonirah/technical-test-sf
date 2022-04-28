<?php

namespace App\Entity;

use App\Repository\ClientApvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientApvRepository::class)
 */
class ClientApv
{
    const FIELDS = [
        'compteAfaire' => 0,
        'compteEvent' => 1,
        'compteDernierEvent' => 2,
        'numeroFiche' => 3,
        'libelleCivilite' => 4,
        'propriteActuelVehicule' => 5,
        'nom' => 6,
        'prenom' => 7,
        'numAndNameVoie' => 8,
        'complementAdressOne' => 9,
        'codePostal' => 10,
        'ville' => 11,
        'telephoneDomicile' => 12,
        'telephonePortable' => 13,
        'telephoneJob' => 14,
        'email' => 15,
        'dateMiseCirculation' => 16,
        'dateAchat' => 17,
        'dateDernierEvent' => 18,
        'libelleMarq' => 19,
        'libelleModel' => 20,
        'version' => 21,
        'vin' => 22,
        'immatriculation' => 23,
        'typeProspect' => 24,
        'kilometrage' => 25,
        'libelleEnergie' => 26,
        'vendeurVN' => 27,
        'vendeurVO' => 28,
        'commentaireFacturation' => 29,
        'typeVNVO' => 30,
        'numeroDossierVNVO' => 31,
        'intermediaireVenteVN' => 32,
        'dateEvenement' => 33,
        'origineEvenement' => 34,
    ];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $compteAfaire;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $compteEvent;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $compteDernierEvent;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $numeroFiche;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleCivilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propriteActuelVehicule;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numAndNameVoie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complementAdressOne;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephoneDomicile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephonePortable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephoneJob;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateMiseCirculation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateDernierEvent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleMarq;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleModel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeProspect;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleEnergie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vendeurVN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vendeurVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaireFacturation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeVNVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroDossierVNVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intermediaireVenteVN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $origineEvenement;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAfaire(): ?string
    {
        return $this->compteAfaire;
    }

    public function setCompteAfaire(string $compteAfaire): self
    {
        $this->compteAfaire = $compteAfaire;

        return $this;
    }

    public function getCompteEvent(): ?string
    {
        return $this->compteEvent;
    }

    public function setCompteEvent(string $compteEvent): self
    {
        $this->compteEvent = $compteEvent;

        return $this;
    }

    public function getCompteDernierEvent(): ?string
    {
        return $this->compteDernierEvent;
    }

    public function setCompteDernierEvent(string $compteDernierEvent): self
    {
        $this->compteDernierEvent = $compteDernierEvent;

        return $this;
    }

    public function getNumeroFiche(): ?int
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(int $numeroFiche): self
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): self
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getPropriteActuelVehicule(): ?string
    {
        return $this->propriteActuelVehicule;
    }

    public function setPropriteActuelVehicule(?string $propriteActuelVehicule): self
    {
        $this->propriteActuelVehicule = $propriteActuelVehicule;

        return $this;
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

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumAndNameVoie(): ?string
    {
        return $this->numAndNameVoie;
    }

    public function setNumAndNameVoie(?string $numAndNameVoie): self
    {
        $this->numAndNameVoie = $numAndNameVoie;

        return $this;
    }

    public function getComplementAdressOne(): ?string
    {
        return $this->complementAdressOne;
    }

    public function setComplementAdressOne(?string $complementAdressOne): self
    {
        $this->complementAdressOne = $complementAdressOne;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?string $telephoneJob): self
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateMiseCirculation(): ?string
    {
        return $this->dateMiseCirculation;
    }

    public function setDateMiseCirculation(?string $dateMiseCirculation): self
    {
        $this->dateMiseCirculation = $dateMiseCirculation;

        return $this;
    }

    public function getDateAchat(): ?string
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?string $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvent(): ?string
    {
        return $this->dateDernierEvent;
    }

    public function setDateDernierEvent(?string $dateDernierEvent): self
    {
        $this->dateDernierEvent = $dateDernierEvent;

        return $this;
    }

    public function getLibelleMarq(): ?string
    {
        return $this->libelleMarq;
    }

    public function setLibelleMarq(?string $libelleMarq): self
    {
        $this->libelleMarq = $libelleMarq;

        return $this;
    }

    public function getLibelleModel(): ?string
    {
        return $this->libelleModel;
    }

    public function setLibelleModel(?string $libelleModel): self
    {
        $this->libelleModel = $libelleModel;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(?string $typeProspect): self
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->libelleEnergie;
    }

    public function setLibelleEnergie(?string $libelleEnergie): self
    {
        $this->libelleEnergie = $libelleEnergie;

        return $this;
    }

    public function getVendeurVN(): ?string
    {
        return $this->vendeurVN;
    }

    public function setVendeurVN(?string $vendeurVN): self
    {
        $this->vendeurVN = $vendeurVN;

        return $this;
    }

    public function getVendeurVO(): ?string
    {
        return $this->vendeurVO;
    }

    public function setVendeurVO(?string $vendeurVO): self
    {
        $this->vendeurVO = $vendeurVO;

        return $this;
    }

    public function getCommentaireFacturation(): ?string
    {
        return $this->commentaireFacturation;
    }

    public function setCommentaireFacturation(?string $commentaireFacturation): self
    {
        $this->commentaireFacturation = $commentaireFacturation;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->typeVNVO;
    }

    public function setTypeVNVO(?string $typeVNVO): self
    {
        $this->typeVNVO = $typeVNVO;

        return $this;
    }

    public function getNumeroDossierVNVO(): ?string
    {
        return $this->numeroDossierVNVO;
    }

    public function setNumeroDossierVNVO(?string $numeroDossierVNVO): self
    {
        $this->numeroDossierVNVO = $numeroDossierVNVO;

        return $this;
    }

    public function getIntermediaireVenteVN(): ?string
    {
        return $this->intermediaireVenteVN;
    }

    public function setIntermediaireVenteVN(?string $intermediaireVenteVN): self
    {
        $this->intermediaireVenteVN = $intermediaireVenteVN;

        return $this;
    }

    public function getDateEvenement(): ?string
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(?string $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(?string $origineEvenement): self
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }

    public function fillFromArray(array $aData)
    {
        foreach (self::FIELDS as $property => $index) {
            $this->{$property} = $aData[$index];
        }
    }
}
