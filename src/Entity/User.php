<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    public function __construct()
    {
        $this->id = 0;
        $this->nom = 'a';
        $this->plainPassword = 'b';
        $this->password = 'c';
        $this->nbJoueurs = 1;
    }
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

    /******************************************/
    /************* Getteurs *******************/
    /******************************************/
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

    /******************************************/
    /************* Setteurs *******************/
    /******************************************/
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
