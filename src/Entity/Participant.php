<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 * = Utilisateur qui s'est inscrit à une soirée jeux.
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantRepository")
 */
class Participant
{
    public function __construct($idUser, $idEvt, $nb)
    {
        $this->idUser = $idUser;
        $this->idEvt = $idEvt;
        $this->nbJoueurs = $nb;
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
     * @ORM\Column(name="idEvt", type="integer", nullable=false)
     */
    private $idEvt;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJoueurs", type="integer", nullable=false)
     */
    private $nbJoueurs;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getIdEvt(): ?int
    {
        return $this->idEvt;
    }

    public function getNbJoueurs(): ?int
    {
        return $this->nbJoueurs;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function setIdEvt(int $idEvt): self
    {
        $this->idEvt = $idEvt;

        return $this;
    }

    public function setNbJoueurs(int $nbJoueurs): self
    {
        $this->nbJoueurs = $nbJoueurs;

        return $this;
    }

}
?>