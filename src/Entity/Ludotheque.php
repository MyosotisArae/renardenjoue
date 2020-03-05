<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ludotheque
 *
 * @ORM\Table(name="ludotheque")
 * @ORM\Entity(repositoryClass="App\Repository\LudothequeRepository")
 */
class Ludotheque
{
    public function __construct()
    {
      $this->id = 0;
      $this->nom = "Aucun jeu trouvé";
      $this->but = '';
      $this->ppe = "Les critères que vous avez choisis n'ont pas permis de trouver un jeu correspondant dans notre collection. Réessayez avec moins de critères, peut-être.<br>Cliquez sur le bouton Recherche pour afficher à nouveau la liste complète des jeux.";
      $this->nbjmin = 2;
      $this->nbjmax = 8;
      $this->dureemin = 15;
      $this->dureemax = 60;
      $this->dominance = 3;
      $this->meca = 0;
    }

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
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullnom", type="string", length=100, nullable=true)
     */
    private $fullnom;

    /**
     * @var string
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=20, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="but", type="string", length=200, nullable=false)
     */
    private $but;

    /**
     * @var string
     *
     * @ORM\Column(name="ppe", type="text", length=0, nullable=false)
     */
    private $ppe;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJmin", type="smallint", nullable=false, options={"default"="2"})
     */
    private $nbjmin = '2';

    /**
     * @var int
     *
     * @ORM\Column(name="nbJmax", type="smallint", nullable=false, options={"default"="5"})
     */
    private $nbjmax = '5';

    /**
     * @var string
     */
    private $nbJoueurs;

    /**
     * @var string
     */
    private $imgNbJoueurs;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeMin", type="smallint", nullable=false, options={"default"="60","unsigned"=true})
     */
    private $dureemin = '60';

    /**
     * @var int
     *
     * @ORM\Column(name="dureeMax", type="smallint", nullable=false, options={"default"="120","unsigned"=true})
     */
    private $dureemax = '120';


    /**
     * Code HTML permettant d'afficher la durée sous forme d'horloges
     * Champ calculé dans JeuxController.getDuree()
     * @var string
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="rate_st", type="integer", nullable=false)
     */
    private $rateSt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rate_ta", type="integer", nullable=false)
     */
    private $rateTa = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rate_ch", type="integer", nullable=false)
     */
    private $rateCh = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rate_co", type="integer", nullable=false)
     */
    private $rateCo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dominance", type="integer", nullable=true)
     */
    private $dominance;

    /**
     * @var int
     *
     * @ORM\Column(name="meca", type="integer", nullable=false)
     */
    private $meca = 0;

    /**
     * @var array
     */
    private $mecanismes;

    /**
     * @var string
     */
    private $difficulte;

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

    public function getFullnom(): ?string
    {
        return $this->fullnom;
    }

    public function setFullnom(?string $fullnom): self
    {
        $this->fullnom = $fullnom;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        if ($this->getFullnom() == null) return $this->getNom();
        if ($this->getFullnom() == "")   return $this->getNom();
        return $this->getFullnom();
    }

    public function setNomComplet(?string $fullnom): self
    {
        $this->fullnom = $fullnom;

        return $this;
    }

    public function getImg(): ?string
    {
        if (!isset($this->img)) return "000_noImg";
        if (strlen($this->img) == 0) return "000_noImg";

        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getBut(): ?string
    {
        return $this->but;
    }

    public function setBut(string $but): self
    {
        $this->but = $but;

        return $this;
    }

    public function getPpe(): ?string
    {
        return $this->ppe;
    }

    public function setPpe(string $ppe): self
    {
        $this->ppe = $ppe;

        return $this;
    }

    public function getNbjmin(): ?int
    {
        return $this->nbjmin;
    }

    public function setNbjmin(int $nbjmin): self
    {
        $this->nbjmin = $nbjmin;

        return $this;
    }

    public function getNbjmax(): ?int
    {
        return $this->nbjmax;
    }

    public function setNbjmax(int $nbjmax): self
    {
        $this->nbjmax = $nbjmax;

        return $this;
    }

    public function getNbJoueurs(): ?string
    {
        $txt = strval($this->getNbjmin());
        if ($this->getNbjmin() < $this->getNbjmax()) { $txt .= " à ".strval($this->getNbjmax()); }
        $txt .= " joueurs";
        
        $this->nbJoueurs = $txt;
        
        return $this->nbJoueurs;
    }

    public function setNbJoueurs(?string $nbJoueurs): self
    {
        $this->nbJoueurs = $nbJoueurs;

        return $this;
    }

    public function getImgNbJoueurs(): ?string
    {
        if ($this->getNbjmax() <= 2) { return "nbJoueurs2.gif"; }
        if ($this->getNbjmax() >= 6) { return "nbJoueurs6.gif"; }
        
        return "nbJoueurs.gif";
    }

    public function setImgNbJoueurs(?string $imgNbJoueurs): self
    {
        $this->imgNbJoueurs = $imgNbJoueurs;

        return $this;
    }

    public function getMeca(): ?int
    {
        return $this->meca;
    }

    public function getDureemin(): ?int
    {
        return $this->dureemin;
    }

    public function setDureemin(int $dureemin): self
    {
        $this->dureemin = $dureemin;

        return $this;
    }

    public function getDureemax(): ?int
    {
        return $this->dureemax;
    }

    public function setDureemax(int $dureemax): self
    {
        $this->dureemax = $dureemax;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getRateSt(): ?int
    {
        return $this->rateSt;
    }

    public function setRateSt(int $rateSt): self
    {
        $this->rateSt = $rateSt;

        return $this;
    }

    public function getRateTa(): ?int
    {
        return $this->rateTa;
    }

    public function setRateTa(int $rateTa): self
    {
        $this->rateTa = $rateTa;

        return $this;
    }

    public function getRateCh(): ?int
    {
        return $this->rateCh;
    }

    public function setRateCh(int $rateCh): self
    {
        $this->rateCh = $rateCh;

        return $this;
    }

    public function getRateCo(): ?int
    {
        return $this->rateCo;
    }

    public function setRateCo(int $rateCo): self
    {
        $this->rateCo = $rateCo;

        return $this;
    }

    public function getDominance(): ?int
    {
        return $this->dominance;
    }

    public function setDominance(?int $dominance): self
    {
        $this->dominance = $dominance;

        return $this;
    }

    public function getListeMecanismes(): ?array
    {
        return array
        (
            1 => "écriture d'ordres",
            2 => "pose d'ouvriers",
            4 => "enchères",
            8 => "choix de cartes/tuiles",
            16 => "prise de risques",
            32 => "bluff",
            64 => "conquête",
            128 => "exploration",
            256 => "garder un secret",
            512 => "combats",
            1024 => "gestion de ressources",
            2048 => "négociation",
            4096 => "tactique",
            8192 => "programmation",
            16384 => "sens de l'observation",
            32768 => "déduction",
            65536 => "draft",
            131072 => "optimisation de paquet"
        );
    }

    public function getMecanismes(): ?array
    {
        $liste = array();
        
        $val = $this->meca * 1;
        $puis2 = 1;
        while ($val > 0)
        {
            $operation = ($val & $puis2);
            if ($operation > 0)
            {
                $liste[] = $this->getListeMecanismes()[$puis2];
                $val -= $puis2;
            }
            $puis2 *= 2;
            if ($puis2 > 131072) return $liste; // Sécurité
        }
        
        return $liste;
    }

    public function setMeca(?int $meca): self
    {
        $this->meca = $meca;

        return $this;
    }

    public function getDifficulte(): ?string
    {
        switch ($this->getDominance())
        {
          case 1: return "Jeu très simple, même pour les plus jeunes";
          case 2: return "Jeu simple, qui ne requiert qu'un peu de réflexion.";
          case 3: return "Jeu abordable, mais qui demande de la concentration.";
          case 4: return "Jeu stratégique avec des règles plutôt conséquentes.";
          case 5: return "Ce jeu est assez difficile à maîtriser";
          default : return "Je ne saurais vous dire ...";
        }
    }

    public function setDifficulte(?string $difficulte): self
    {
        $this->difficulte = $difficulte;

        return $this;
    }


}
?>