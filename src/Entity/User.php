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
     * @Assert\NotBlank(message = "Vous devez choisir un nom.")
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $roles = 0;

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
    public function getRoles(): int
    {
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
