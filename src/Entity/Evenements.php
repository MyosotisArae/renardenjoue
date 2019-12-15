<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenements
 *
 * @ORM\Table(name="evenements")
 * @ORM\Entity(repositoryClass="App\Repository\EvenementsRepository")
 */
class Evenements
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_debut", type="time", nullable=true)
     */
    private $heureDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_fin", type="time", nullable=true)
     */
    private $heureFin;

    /**
     * @var string
     */
    private $periode;

    /**
     * Vaut true si l'utilisateur connecté est inscrit.
     * @var bool
     */
    private $isInscrit;

    public function getIsInscrit(): ?bool
    {
       return $this->isInscrit;
    }

    public function setIsInscrit(bool $isInscrit)
    {
       $this->isInscrit = $isInscrit;
    }

     public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(?\DateTimeInterface $heureDebut): self
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(?\DateTimeInterface $heureFin): self
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    ///////////////////////////////////////////////////////////////////////////////
    //                              Mes fonctions                                //
    ///////////////////////////////////////////////////////////////////////////////

    public function getAUneDateDeFin()
    {
        if ($this->dateFin == null) { return false; }
        if ($this->dateFin == $this->dateDebut) { return false; }
        return true;
    }

    public function getAUneHeureDeFin()
    {
        if ($this->heureFin == null) { return false; }
        if ($this->heureFin == $this->heureDebut) { return false; }
        return true;
    }

    /* Retourne "du ... au ..." si la date de fin est precisee, sinon retourne "Le ..."
     * ensuite, si l'heure de debut est precisee,
     * - si l'heure de fin existe, ajoute A  la suite : " de ... a  ..."
     * - sinon, ajoute "des ..."
     */
    public function getPeriode(): ?string
    {
        $this->periode = "";
        if ($this->getAUneDateDeFin())
        {
          // Si les 2 dates ont le même mois, ne pas le répéter 2 fois.
          if ($this->dateDebut->format("m/Y") == $this->dateFin->format("m/Y"))
          { $this->periode = " du ".$this->dateDebut->format("d")." au ".$this->dateFin->format("d/m/Y"); }
          else
          { $this->periode = " du ".$this->dateDebut->format("d/m/Y")." au ".$this->dateFin->format("d/m/Y"); }
        }
        else { $this->periode = " le ".$this->dateDebut->format("d/m/Y"); }
        $this->periode .= ",\n";
        if ($this->getAUneHeureDeFin()) { $this->periode .= "de ".$this->getHeure($this->heureDebut)." à ".$this->getHeure($this->heureFin); }
        else { $this->periode .= "à  ".$this->getHeure($this->heureDebut); }

        return $this->periode;
    }

    public function setPeriode(string $periode): self
    {
        $this->periode = $periode;

        return $this;
    }

    protected function getHeure($horaire)
    {
      $heure = $horaire->format("G");
      $minutes = $horaire->format("i");
      $minutes = ltrim($minutes,'0');
      return $heure."h".$minutes;
    }

}
