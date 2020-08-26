<?php

namespace App\Repository;

use App\Entity\Participant;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ParticipantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participant::class);
    }

    /**
     * Retourne la liste des id des soirées auxquelles participe l'utilisateur user
     * @return array
     */
    /*
    public function getSoirees(User $user)
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
    */

    /**
     * Retourne le participant éventuel à cette soirée, ou null s'il n'y est pas inscrit
     * @return bool
     */
    public function getParticipant(int $idUser, int $idEvt)
    {
      $qb = $this->createQueryBuilder('p')
                 ->andWhere('p.idUser = :idUser')->setParameter('idUser',$idUser)
                 ->andWhere('p.idEvt  = :idEvt' )->setParameter('idEvt' ,$idEvt);

      $part = $qb->getQuery()
                 ->getResult();
      if (count($part) == 0) return null;

      return $part[0];
    }

    /**
     * Retourne true si cet utilisateur est inscrit à cet évènement, false sinon.
     * @return bool
     */
    public function isParticipant(int $idUser, int $idEvt)
    {
      $part = $this->getParticipant($idUser, $idEvt);
      if ($part == null) return false;

      return true;
    }

    /**
     * Compte les participants à la soirée jeux
     * @return int
     */
    public function combienDeParticipants(int $idEvt)
    {
      $qb = $this->createQueryBuilder('p')
                 ->andWhere('p.idEvt  = :idEvt' )->setParameter('idEvt' ,$idEvt);

      $part = $qb->getQuery()
                 ->getResult();
      if (count($part) == 0) return 0;

      return count($part) + 2;
    }

    /**
     * Retourne les participants à la soirée jeux
     * @return int
     */
    public function getParticipants(int $idEvt)
    {
      $qb = $this->createQueryBuilder('p')
                 ->andWhere('p.idEvt  = :idEvt' )->setParameter('idEvt' ,$idEvt);

      $part = $qb->getQuery()
                 ->getResult();
      if (count($part) == 0) return [];

      return $part;
    }
  
}
