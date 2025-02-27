<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
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
                   ->andWhere('LOWER(u.nom) = LOWER(:pseudo)')
                   ->setParameter('pseudo',$user->getNom());
  
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
        $qb = $this->createQueryBuilder('u')
                   ->orderBy('u.dateDentree', 'DESC');
    
        return $qb
          ->getQuery()
          ->getResult();    
      }

    // Indique si ce User est associé à un Inscrit
    public function isInscrit():bool
    {
        if ($this->getInscrit() == null) return false;
        return true;
    }

      /********************************************************* DISCORD *********************************************************/

      /*
       * @return Id du User dont l'identifiant discord est id
       */
      public function getByDiscordId($id): int
      {
        $qb = $this->createQueryBuilder('u')
                   ->andWhere('u.userId = :ui')
                   ->setParameter('ui', strval($id));

        $resultats = $qb->getQuery()
                        ->getResult();
        if (count($resultats) == 0) return 0;

        $user = $resultats[0];
        return $user->getId();
      }
  
      /*
       * @return User dont l'identifiant est id
       */
      public function getById($id)
      {
        $qb = $this->createQueryBuilder('u')
                   ->andWhere('u.id = :ui')
                   ->setParameter('ui', $id);

        $resultats = $qb->getQuery()
                        ->getResult();
        if (count($resultats) == 0) return null;

        $user = $resultats[0];
        return $user;
      }
  
}
