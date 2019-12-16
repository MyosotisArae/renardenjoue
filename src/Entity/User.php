<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
<<<<<<< HEAD
class User implements UserInterface //, \Serializable
=======
class User implements UserInterface, \Serializable
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
{
    public function __construct()
    {
        $id = 0;
        $nom = 'a';
        $plainPassword = 'b';
        $password = 'c';
    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
<<<<<<< HEAD
     * @Assert\NotBlank()
=======
     * @Assert\NotBlank(message = "Vous devez choisir un nom.")
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
     */
    private $nom;

    /**
     * @ORM\Column(type="array")
     */
    private $roles = ['ROLE_USER'];

    /**
<<<<<<< HEAD
     * @var string Mot de passe saisi par l'utilisateur
     * @Assert\NotBlank()
=======
     * @var string Mot de passe non crypté
     * @Assert\NotBlank(message = "Le mot de passe DOIT être renseigné.")
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
     */
    private $plainPassword;

    /**
<<<<<<< HEAD
     * @var string Mot de passe encodé et persisté
=======
     * @var string Mot de passe crypté et enregistré en base
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message = "Le mot de passe DOIT être renseigné.")
     */
    private $password;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Email(message = "L'email '{{ value }}' n'est pas valide.")
     */
    private $email;

    /**
     * Soirées jeux auxquelles l'utilisateur est inscrit.
     * tableau d'id (table Evenements)
     */
/*
    private $soirees;

    public function getSoirees(): ?array
    {
        return $this->soirees;
    }

    public function setSoirees(array $liste)
    {
        $this->soirees = $liste;
    }
*/
=======
     * @Assert\Email(message = "L'email '{{ value }}' n'est pas valide.")
     * @ORM\Column(type="string", nullable=true, unique=true)
     */
    private $email;

    /******************************************/
    /************* Getteurs *******************/
    /******************************************/
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
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
    public function getRoles(): array
    {
        if (empty($this->roles)) {
            return ['ROLE_USER'];
        }

        return $this->roles;
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

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @see UserInterface
     */
    public function getPlainPassword(): string
    {
        return (string) $this->plainPassword;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
=======
    public function setPlainPassword(string $plainPassword): self
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321
    {
        $this->plainPassword = $plainPassword;

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

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->nom,
            $this->email,
            $this->password
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->nom,
                $this->email,
                $this->password
                ) = unserialize($serialized);
    }
}
