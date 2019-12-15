<?php

namespace App\Repository;

use App\Entity\Participant;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ParticipantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Participant::class);
    }

    /**
     * Retourne la liste des id des soirées auxquelles participe l'utilisateur user
     * @return array
     */
      public function getParticipants(User $user)
      {
        $qb = $this->createQueryBuilder('p')
                   ->andWhere('p.idUser = :idUser')->setParameter('idUser',$user->getId());
  
        $evts = $qb->getQuery()
                    ->getResult();

        $liste = [];
        foreach ($evts as $evt)
        {
            $liste[] = $evt->getIdEvt();
        }

        return $liste;
      }

      /**
       * Retourne true si cet utilisateur est inscrit à cet évènement, false sinon.
       * @return bool
       */
        public function getParticipation(int $idUser, int $idEvt)
        {
          $qb = $this->createQueryBuilder('p')
                     ->andWhere('p.idUser = :idUser')->setParameter('idUser',$idUser)
                     ->andWhere('p.idEvt  = :idEvt' )->setParameter('idEvt' ,$idEvt);
    
          $evts = $qb->getQuery()
                      ->getResult();
  
          if (count($evts) == 0) return false;
  
          return true;
        }
  
}
