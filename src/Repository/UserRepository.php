<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    // Retourne l'utilisateur de même nom.
    /**
      * @return User
      */
      public function getUser(User $user)
      {
        $qb = $this->createQueryBuilder('u')
                   ->andWhere('LOWER(u.nom) = LOWER(:pseudo)')->setParameter('pseudo',$user->getNom());
  
        $users = $qb->getQuery()
                    ->getResult();
        if (count($users) == 0) { return null; }
        $user = $users[0];

        return $user;
      }
  
}
