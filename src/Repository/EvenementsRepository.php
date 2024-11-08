<?php
namespace App\Repository;

use App\Entity\Evenements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use \DateTime;
use \DateInterval;

/**
 * @method Evenements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenements[]    findAll()
 * @method Evenements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
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
      // Intervalles de 3 et 11 mois
      $troisMois = new DateInterval("P3M"); // P:date, Y=ans, M=mois, D=jours, W=semaines, T:heure, H=heures, M=minutes, S=secondes
      $onzeMois = new DateInterval("P11M");
      // Calculer les dates il y a 3 mois et dans 7 mois
      $dateDebut = $dateDebut->sub($troisMois);
      $dateFin = $dateFin->add($onzeMois);
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
        ->andWhere('e.dateDebut > :dd')
        ->orderBy('e.dateDebut', 'DESC');
      ;
      //$_SESSION['requeteSQL'] = $qb->getQuery()->getSQL();

      return $qb
        ->getQuery()
        ->getResult()
      ;

    }

    // Retourne les 3 prochains evenements
    /**
      * @return Un tableau contenant des infos formatees concernant les 3 prochains evenements:
      * - id
      * - date
      * - titre
      */
      public function getNextEvts(): array
      {
        // Recuperer les evenements à partir d'aujourd'hui et dans la limite de 3.
        $qb = $this->createQueryBuilder('e')
          ->andWhere('e.dateDebut >= CURRENT_DATE()')
          ->orderBy('e.dateDebut');
        ;
        // Ne retourner que 4 résultats
        $limit = 4;
        $qb->setMaxResults($limit);
        
        $resultats = $qb
                     ->getQuery()
                     ->getResult()
        ;
        $liste = [];
        foreach ($resultats as $evt)
        {
          $element = array
          (
            "id"    => $evt->getId(),
            "date"  => date_format($evt->getDateDebut(), 'd/m/Y'),
            "titre" => $evt->getTitre()
          );
          $liste[] = $element;
        }
        return $liste;
  
      }
    // Retourne les dates de nos soirées jeux, les plus récentes en premier.
    /**
      * @return Evenements[]
      */
      public function getDatesRenard(): array
      {  
        // Recuperer tout evenement qui se finit ou debute dans l'intervalle [$dateDebut,$dateFin[
        $qb = $this->createQueryBuilder('e')
          ->where('e.capacite > 0')
          ->orderBy('e.dateDebut', 'DESC');
  
        return $qb
          ->getQuery()
          ->getResult()
        ;
  
      }

      // Retourne la prochaine date
      /**
        * @return Evenement sous forme de texte
        */
      public function getNextDate(): string
      {
        $today = new Datetime("now"); // new Datetime(date('Y-M-d'));
        $onzeMois = new DateInterval("P11M");
        $dateFin = $today->add($onzeMois);

        // Recuperer le 1er evenement qui debute après $today
        $qb = $this->createQueryBuilder('e')
                   ->andWhere('e.dateDebut >= CURRENT_DATE()')
          /*
          ->andWhere('e.dateDebut >= :dd')
          ->setParameter('dd', $today)
          ->andWhere('e.dateDebut <= :df')
          ->setParameter('df', $dateFin)
          */
        ;
        // $_SESSION['requeteSQL'] = $qb->getQuery()->getSQL();
        $resultat = $qb->getQuery()
                       ->getResult();
        if (count($resultat) == 0) return "Rien n'est prévu dans les prochains mois.";
      
        // Formatage de la première date du tableau
        $prem = $resultat[0];
        return "le ".date_format( $prem->getDateDebut(), 'd/m/Y')." : ".$prem->getTitre();
      }

      /********************************************************* DISCORD *********************************************************/

      /*
       * @return L'evt dont le channel_id est $channelId, ou null s'il n'existe pas
       */
      public function getByChannel($channelId)
      {
        $qb = $this->createQueryBuilder('e')
                   ->andWhere('e.channelId = :ci')
                   ->setParameter('ci', strval($channelId));

        $resultats = $qb->getQuery()
                        ->getResult();
        if (count($resultats) == 0) return null;

        $evt = $resultats[0];
        return $evt;
      }

}
