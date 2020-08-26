<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(Registry $registry)
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

      // Retourne tous les utilisateurs, en commençant par les plus récemment inscrits.
      /**
        * @return Users[]
        */
        public function getUsers(): array
        {  
          // Recuperer tout evenement qui se finit ou debute dans l'intervalle [$dateDebut,$dateFin[
          $qb = $this->createQueryBuilder('u')
                     ->orderBy('u.dateDentree', 'DESC');
    
          return $qb
            ->getQuery()
            ->getResult()
          ;
    
        }
  
}
