<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use App\Entity\Inscrit;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    public function __construct()
    {
        $this->nom = 'a';
        $this->plainPassword = 'b';
        $this->password = 'c';
        $this->nbJoueurs = 1;
        // Date d'entrée
        $this->dateDentree = new DateTime();
        // identifiant Discord
        $this->userId = '';
        //$this->inscrit = null;
        $this->isInscrit = false;
        $this->vraiNom = "inconnu";
        $this->vraiPrenom = "inconnu";
    }

    private bool $isInscrit = false;
    private Inscrit $inscrit;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message = "Vous devez choisir un nom.")
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $roles = 0;

    /**
     * @ORM\Column(name="nbJoueurs", type="integer", nullable=false)
     */
    private $nbJoueurs = 1;

    /**
     * @var bool Est-ce un administrateur ?
     */
    private $isAdmin;

    /**
     * @var string Mot de passe non crypté
     */
    private $plainPassword;

    /**
     * @var string Mot de passe crypté et enregistré en base
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @Assert\Email(message = "L'email '{{ value }}' n'est pas valide.")
     * @ORM\Column(type="string", nullable=true, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="dateDentree", type="datetime", nullable=false)
     *
     */
    private $dateDentree;

    /**
     * @var \string|null
     *
     * @ORM\Column(name="user_id", type="string", length=20, nullable=true)
     *
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="vraiNom", type="string", nullable=true)
     */
    private $vraiNom;

    /**
     * @var string
     *
     * @ORM\Column(name="vraiPrenom", type="string", nullable=true)
     */
    private $vraiPrenom;

    private bool $RGPD;
    private bool $Compta;
    private bool $Newsletter;

    /******************************************/
    /************* Getteurs *******************/
    /******************************************/
    public function getInscrit(): ?Inscrit
    {
        if ($this->isInscrit) return $this->inscrit;
        return null;
    }

    public function getRGPD(): int
    {
        if ($this->isInscrit) { return $this->getInscrit()->getRGPD(); }
        return 0; 
    }

    public function getCompta(): int
    {
        if ($this->isInscrit) { return $this->getInscrit()->getRegle(); }
        return 0; 
    }

    public function getNewsletter(): int
    {
        if ($this->isInscrit) { return $this->getInscrit()->getNewsletter(); }
        return 0; 
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->nom;
    }

    /**
     */
    public function getPlainPassword(): string
    {
        return (string) $this->plainPassword;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): int
    {
        return $this->roles;
    }

    /**
     * @see UserInterface
     */
    public function getIsAdmin(): bool
    {
        return ($this->roles == 8);
    }

    /**
     */
    public function getDateDentree()
    {
        return $this->dateDentree;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    // Vaut "inconnu" s'il n'est pas renseigné
    public function getVraiNom(): ?string
    {
        return $this->noms($this->vraiNom);
    }

    // Vaut "inconnu" s'il n'est pas renseigné
    public function getVraiPrenom(): ?string
    {
        return $this->noms($this->vraiPrenom);
    }

    private function noms(string $unNom)
    {
        if ($unNom)
        {
            if (strlen($unNom) > 0) return $unNom;
        }
        // Si le nom est null ou vide, retourner ceci :
        return "inconnu";
    }

    /******************************************/
    /************* Setteurs *******************/
    /******************************************/
    public function setInscrit(Inscrit $inscrit): self
    {
        $this->inscrit= $inscrit;
        $this->isInscrit= true;

        return $this;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function setNbJoueurs(int $nb): self
    {
        $this->nbJoueurs = $nb;

        return $this;
    }

    public function setRoles(int $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function setPlainPassword(string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setUserId(string $u): self
    {
        $this->userId= $u;

        return $this;
    }

    public function setVraiNom(string $vraiNom): self
    {
        $this->vraiNom= $vraiNom;

        return $this;
    }

    public function setVraiPrenom(string $vraiPrenom): self
    {
        $this->vraiPrenom= $vraiPrenom;

        return $this;
    }


    /******************************************/
    /************** Autres ********************/
    /******************************************/
    function addRole($role) {
        $this->roles[] = $role;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

}
