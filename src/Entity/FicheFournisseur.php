<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheFournisseurRepository")
 */
class FicheFournisseur
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
    private $SocialRaisonSocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SocialAdresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $SocialCodePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SocialPays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SocialVille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialTel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialSiren;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialVilleEnregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialTVAIntracom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialNRCS;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialNCNUF;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeAdresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeVille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeCodePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandePays;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commandeEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationAdresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationVille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationCodePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationPays;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facturationEmail;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $facturationCondReglement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $RIB;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $IBAN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $BIC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $DomiciliactionBancaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logistiqueInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logistiqueTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logistiqueEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisReserveInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisReserveTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisReserveEmai;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediEanCommande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediEanFacture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ediEanLivre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialRaisonSocial(): ?string
    {
        return $this->SocialRaisonSocial;
    }

    public function setSocialRaisonSocial(string $SocialRaisonSocial): self
    {
        $this->SocialRaisonSocial = $SocialRaisonSocial;

        return $this;
    }

    public function getSocialAdresse(): ?string
    {
        return $this->SocialAdresse;
    }

    public function setSocialAdresse(string $SocialAdresse): self
    {
        $this->SocialAdresse = $SocialAdresse;

        return $this;
    }

    public function getSocialCodePostal(): ?int
    {
        return $this->SocialCodePostal;
    }

    public function setSocialCodePostal(int $SocialCodePostal): self
    {
        $this->SocialCodePostal = $SocialCodePostal;

        return $this;
    }

    public function getSocialPays(): ?string
    {
        return $this->SocialPays;
    }

    public function setSocialPays(string $SocialPays): self
    {
        $this->SocialPays = $SocialPays;

        return $this;
    }

    public function getSocialVille(): ?string
    {
        return $this->SocialVille;
    }

    public function setSocialVille(string $SocialVille): self
    {
        $this->SocialVille = $SocialVille;

        return $this;
    }

    public function getSocialTel(): ?string
    {
        return $this->socialTel;
    }

    public function setSocialTel(string $socialTel): self
    {
        $this->socialTel = $socialTel;

        return $this;
    }

    public function getSocialEmail(): ?string
    {
        return $this->socialEmail;
    }

    public function setSocialEmail(string $socialEmail): self
    {
        $this->socialEmail = $socialEmail;

        return $this;
    }

    public function getSocialSiren(): ?string
    {
        return $this->socialSiren;
    }

    public function setSocialSiren(string $socialSiren): self
    {
        $this->socialSiren = $socialSiren;

        return $this;
    }

    public function getSocialVilleEnregistrement(): ?string
    {
        return $this->socialVilleEnregistrement;
    }

    public function setSocialVilleEnregistrement(string $socialVilleEnregistrement): self
    {
        $this->socialVilleEnregistrement = $socialVilleEnregistrement;

        return $this;
    }

    public function getSocialTVAIntracom(): ?string
    {
        return $this->socialTVAIntracom;
    }

    public function setSocialTVAIntracom(string $socialTVAIntracom): self
    {
        $this->socialTVAIntracom = $socialTVAIntracom;

        return $this;
    }

    public function getSocialNRCS(): ?string
    {
        return $this->socialNRCS;
    }

    public function setSocialNRCS(string $socialNRCS): self
    {
        $this->socialNRCS = $socialNRCS;

        return $this;
    }

    public function getSocialNCNUF(): ?string
    {
        return $this->socialNCNUF;
    }

    public function setSocialNCNUF(string $socialNCNUF): self
    {
        $this->socialNCNUF = $socialNCNUF;

        return $this;
    }

    public function getCommandeInterlocuteur(): ?string
    {
        return $this->commandeInterlocuteur;
    }

    public function setCommandeInterlocuteur(?string $commandeInterlocuteur): self
    {
        $this->commandeInterlocuteur = $commandeInterlocuteur;

        return $this;
    }

    public function getCommandeAdresse(): ?string
    {
        return $this->commandeAdresse;
    }

    public function setCommandeAdresse(?string $commandeAdresse): self
    {
        $this->commandeAdresse = $commandeAdresse;

        return $this;
    }

    public function getCommandeVille(): ?string
    {
        return $this->commandeVille;
    }

    public function setCommandeVille(?string $commandeVille): self
    {
        $this->commandeVille = $commandeVille;

        return $this;
    }

    public function getCommandeCodePostal(): ?string
    {
        return $this->commandeCodePostal;
    }

    public function setCommandeCodePostal(?string $commandeCodePostal): self
    {
        $this->commandeCodePostal = $commandeCodePostal;

        return $this;
    }

    public function getCommandePays(): ?string
    {
        return $this->commandePays;
    }

    public function setCommandePays(?string $commandePays): self
    {
        $this->commandePays = $commandePays;

        return $this;
    }

    public function getCommandeTel(): ?string
    {
        return $this->commandeTel;
    }

    public function setCommandeTel(?string $commandeTel): self
    {
        $this->commandeTel = $commandeTel;

        return $this;
    }

    public function getCommandeEmail(): ?string
    {
        return $this->commandeEmail;
    }

    public function setCommandeEmail(?string $commandeEmail): self
    {
        $this->commandeEmail = $commandeEmail;

        return $this;
    }

    public function getFacturationInterlocuteur(): ?string
    {
        return $this->facturationInterlocuteur;
    }

    public function setFacturationInterlocuteur(?string $facturationInterlocuteur): self
    {
        $this->facturationInterlocuteur = $facturationInterlocuteur;

        return $this;
    }

    public function getFacturationAdresse(): ?string
    {
        return $this->facturationAdresse;
    }

    public function setFacturationAdresse(?string $facturationAdresse): self
    {
        $this->facturationAdresse = $facturationAdresse;

        return $this;
    }

    public function getFacturationVille(): ?string
    {
        return $this->facturationVille;
    }

    public function setFacturationVille(?string $facturationVille): self
    {
        $this->facturationVille = $facturationVille;

        return $this;
    }

    public function getFacturationCodePostal(): ?string
    {
        return $this->facturationCodePostal;
    }

    public function setFacturationCodePostal(?string $facturationCodePostal): self
    {
        $this->facturationCodePostal = $facturationCodePostal;

        return $this;
    }

    public function getFacturationPays(): ?string
    {
        return $this->facturationPays;
    }

    public function setFacturationPays(?string $facturationPays): self
    {
        $this->facturationPays = $facturationPays;

        return $this;
    }

    public function getFacturationTel(): ?string
    {
        return $this->facturationTel;
    }

    public function setFacturationTel(?string $facturationTel): self
    {
        $this->facturationTel = $facturationTel;

        return $this;
    }

    public function getFacturationEmail(): ?string
    {
        return $this->facturationEmail;
    }

    public function setFacturationEmail(?string $facturationEmail): self
    {
        $this->facturationEmail = $facturationEmail;

        return $this;
    }

    public function getFacturationCondReglement(): ?string
    {
        return $this->facturationCondReglement;
    }

    public function setFacturationCondReglement(?string $facturationCondReglement): self
    {
        $this->facturationCondReglement = $facturationCondReglement;

        return $this;
    }

    public function getRIB(): ?string
    {
        return $this->RIB;
    }

    public function setRIB(?string $RIB): self
    {
        $this->RIB = $RIB;

        return $this;
    }

    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    public function setIBAN(?string $IBAN): self
    {
        $this->IBAN = $IBAN;

        return $this;
    }

    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    public function setBIC(?string $BIC): self
    {
        $this->BIC = $BIC;

        return $this;
    }

    public function getDomiciliactionBancaire(): ?string
    {
        return $this->DomiciliactionBancaire;
    }

    public function setDomiciliactionBancaire(?string $DomiciliactionBancaire): self
    {
        $this->DomiciliactionBancaire = $DomiciliactionBancaire;

        return $this;
    }

    public function getLogistiqueInterlocuteur(): ?string
    {
        return $this->logistiqueInterlocuteur;
    }

    public function setLogistiqueInterlocuteur(?string $logistiqueInterlocuteur): self
    {
        $this->logistiqueInterlocuteur = $logistiqueInterlocuteur;

        return $this;
    }

    public function getLogistiqueTel(): ?string
    {
        return $this->logistiqueTel;
    }

    public function setLogistiqueTel(?string $logistiqueTel): self
    {
        $this->logistiqueTel = $logistiqueTel;

        return $this;
    }

    public function getLogistiqueEmail(): ?string
    {
        return $this->logistiqueEmail;
    }

    public function setLogistiqueEmail(?string $logistiqueEmail): self
    {
        $this->logistiqueEmail = $logistiqueEmail;

        return $this;
    }

    public function getAvisReserveInterlocuteur(): ?string
    {
        return $this->avisReserveInterlocuteur;
    }

    public function setAvisReserveInterlocuteur(?string $avisReserveInterlocuteur): self
    {
        $this->avisReserveInterlocuteur = $avisReserveInterlocuteur;

        return $this;
    }

    public function getAvisReserveTel(): ?string
    {
        return $this->avisReserveTel;
    }

    public function setAvisReserveTel(?string $avisReserveTel): self
    {
        $this->avisReserveTel = $avisReserveTel;

        return $this;
    }

    public function getAvisReserveEmai(): ?string
    {
        return $this->avisReserveEmai;
    }

    public function setAvisReserveEmai(?string $avisReserveEmai): self
    {
        $this->avisReserveEmai = $avisReserveEmai;

        return $this;
    }

    public function getEdiInterlocuteur(): ?string
    {
        return $this->ediInterlocuteur;
    }

    public function setEdiInterlocuteur(?string $ediInterlocuteur): self
    {
        $this->ediInterlocuteur = $ediInterlocuteur;

        return $this;
    }

    public function getEdiTel(): ?string
    {
        return $this->ediTel;
    }

    public function setEdiTel(?string $ediTel): self
    {
        $this->ediTel = $ediTel;

        return $this;
    }

    public function getEdiEmail(): ?string
    {
        return $this->ediEmail;
    }

    public function setEdiEmail(?string $ediEmail): self
    {
        $this->ediEmail = $ediEmail;

        return $this;
    }

    public function getEdiEanCommande(): ?string
    {
        return $this->ediEanCommande;
    }

    public function setEdiEanCommande(?string $ediEanCommande): self
    {
        $this->ediEanCommande = $ediEanCommande;

        return $this;
    }

    public function getEdiEanFacture(): ?string
    {
        return $this->ediEanFacture;
    }

    public function setEdiEanFacture(?string $ediEanFacture): self
    {
        $this->ediEanFacture = $ediEanFacture;

        return $this;
    }

    public function getEdiEanLivre(): ?string
    {
        return $this->ediEanLivre;
    }

    public function setEdiEanLivre(?string $ediEanLivre): self
    {
        $this->ediEanLivre = $ediEanLivre;

        return $this;
    }
}
