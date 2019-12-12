<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
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
                   ->andWhere('u.nom = :pseudo')->setParameter('pseudo',$user->getNom());
  
        $users = $qb->getQuery()
                    ->getResult();
        if (count($users) == 0) { return null; }
        return $users[0];
      }
  
}
