<?php
namespace App\Repository;

use App\Entity\Evenements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use \DateTime;
use \DateInterval;

class EvenementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Evenements::class);
    }

    ///////////////////////////////////////////////////////////////////////////////
    //                              Mes requetes                                 //
    ///////////////////////////////////////////////////////////////////////////////

    // Retourne les dates des evenements les plus proches (3 mois dans le passe, 6 dans le futur).
    /**
      * @return Evenements[]
      */
    public function getDatesToDisplay(): array
    {
      $dateDebut = new DateTime();
      $dateFin = new DateTime();
      // Intervalles de 3 et 6 mois
      $troisMois = new DateInterval("P3M"); // P:date, Y=ans, M=mois, D=jours, W=semaines, T:heure, H=heures, M=minutes, S=secondes
      $septMois = new DateInterval("P7M");
      // Calculer les dates il y a 3 mois et dans 7 mois
      $dateDebut = $dateDebut->sub($troisMois);
      $dateFin = $dateFin->add($septMois);
      // Ces deux dates doivent commencer le 1
      $dateDebut = new DateTime($dateDebut->format('Y-m-1'));
      $dateFin = new DateTime($dateFin->format('Y-m-1'));

      // Recuperer tout evenement qui se finit ou debute dans l'intervalle [$dateDebut,$dateFin[
      $qb = $this->createQueryBuilder('e')
        ->where('e.dateFin >= :dd')
        ->setParameter('dd', $dateDebut)
        ->orWhere('e.dateFin is null')
        ->andWhere('e.dateDebut < :df')
        ->setParameter('df', $dateFin)
      ;
      $_SESSION['requeteSQL'] = $qb->getQuery()->getSQL();

      return $qb
        ->getQuery()
        ->getResult()
      ;

    }
}