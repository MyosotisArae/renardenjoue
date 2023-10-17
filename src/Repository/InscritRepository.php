<?php

namespace App\Repository;

use App\Entity\Inscrit;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class InscritRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inscrit::class);
    }

    /**
     * Retourne les infos sur l'inscription (ou pas) de cet utilisateur
     * @return Inscrit
     */
    public function getInscrit(int $idUser)
    {
        $util = $this->get("utilitaires");
        // Trouver quelle est l'année associative:
        $annee = $util->getAnnee();
        // Trouver cet utilisateur dans les inscrits de l'année en cours :
        $qb = $this->createQueryBuilder('i')
                 ->andWhere('i.idUser = :idUser')->setParameter('idUser',$idUser)
                 ->andWhere('i.annee  = :annee' )->setParameter('annee' ,$annee);

        $inscrit = $qb->getQuery()
                      ->getResult();
        if (count($inscrit) == 0) return null;

        return $inscrit[0];
    }

    /**
     * Retourne tous les inscrits de cette annee
     * @return Inscrit[]
     */
    public function getInscrits(int $annee)
    {
        // Trouver cet utilisateur dans les inscrits de l'année en cours :
        $qb = $this->createQueryBuilder('i')
                 ->andWhere('i.annee  = :annee' )->setParameter('annee' ,$annee);

        $inscrits = $qb->getQuery()
                       ->getResult();

        return $inscrits;
    }


}
?>
