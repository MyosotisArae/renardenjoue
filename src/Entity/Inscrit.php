<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscrit
 * = user ayant rempli le formulaire d'inscription pour l'année indiquée (2023 = année associative 2023-2024)
 *
 * @ORM\Table(name="inscrit")
 * @ORM\Entity(repositoryClass="App\Repository\InscritRepository")
 */
class Inscrit
{
    public function __construct($idUser)
    {
        $util = $this->get("utilitaires");

        $this->idUser = $idUser;
        $this->annee = $util->getAnnee();
        $this->cotisation = 0;
        $this->regle = 0;
        $this->RGPD = 0;
        $this->newsletter = 1;
        $this->mailRGPD = "";
    }

    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="annee", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="cotisation", type="integer", nullable=false)
     */
    private $cotisation;

    /**
     * @var int
     *
     * @ORM\Column(name="regle", type="integer", nullable=false)
     */
    private $regle;

    /**
     * @var int
     *
     * @ORM\Column(name="RGPD", type="integer", nullable=false)
     */
    private $RGPD;

    /**
     * @var string
     *
     * @ORM\Column(name="mailRGPD", type="string", nullable=false)
     */
    private $mailRGPD;

    /**
     * @var int
     *
     * @ORM\Column(name="newsletter", type="integer", nullable=false)
     */
    private $newsletter;

    // Clé étrangère vers User.id
    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    // année du forum débutant cette année associative
    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    // Montant de la cotisation
    public function getCotisation(): ?int
    {
        return $this->cotisation;
    }

    // Booléen : cotisation réglée O/N
    public function getRegle(): ?int
    {
        return $this->regle;
    }

    // Booléen : souhaite autoriser la communication de l'email aux boutiques O/N
    public function getRGPD(): ?int
    {
        return $this->RGPD;
    }

    // Ce mail n'est saisi que s'il est différent de celui du profil (qui est pour la newsletter).
    public function getMailRGPD(): ?string
    {
        return $this->mailRGPD;
    }

    // Booléen : souhaite recevoir la newsletter O/N
	public function getNewsletter(): ?int
    {
        return $this->newsletter;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function setCotisation(int $cotisation): self
    {
        $this->cotisation = $cotisation;

        return $this;
    }

    public function setRegle(int $regle): self
    {
        $this->regle = $regle;

        return $this;
    }

    public function setRGPD(int $RGPD): self
    {
        $this->RGPD = $RGPD;

        return $this;
    }

    public function setMailRGPD(string $mailRGPD): self
    {
        $this->mailRGPD = $mailRGPD;

        return $this;
    }

    public function setNewsletter(int $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

}
?>
