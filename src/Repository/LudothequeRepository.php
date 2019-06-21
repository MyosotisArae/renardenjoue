<?php
namespace App\Repository;

use App\Entity\Ludotheque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use \DateTime;
use \DateInterval;

class LudothequeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ludotheque::class);
    }

    ///////////////////////////////////////////////////////////////////////////////
    //                              Mes requetes                                 //
    ///////////////////////////////////////////////////////////////////////////////

    // Retourne les jeux dans l'ordre alphabétique.
    /**
      * @return Evenements[]
      */
    public function getListeJeux()
    {
      $qb = $this->createQueryBuilder('j');
      
      // Des criteres de recherche ?
          if ($this->postIsSet('jeuTitre'))
          {
            $qb->andWhere('j.nom LIKE :boutDeTitre')->setParameter('boutDeTitre', '%'.$_POST['jeuTitre'].'%');
          }
          if ($this->postIsSet('jeuNiveau'))
          {
            $qb->andWhere('j.dominance = :niveau')->setParameter('niveau', $_POST['jeuNiveau']);
          }
          if ($this->postIsSet('jeuDuree'))
          {
            $dMin = $this->getDureeMin();
            $dMax = $this->getDureeMax();
            if ($dMin > 0) { $qb->andWhere('j.dureemin >= :dMin')->setParameter('dMin', $dMin); }; 
            if ($dMax > 0) { $qb->andWhere('j.dureemax <= :dMax')->setParameter('dMax', $dMax); }; 
          }
          if ($this->postIsSet('jeuNb'))
          {
            if ($_POST['jeuNb'] > 2) { $qb->andWhere('j.nbjmin <= :nb'); }
            if ($_POST['jeuNb'] < 8) { $qb->andWhere('j.nbjmax >= :nb'); }
            $qb->setParameter('nb', $_POST['jeuNb']);
          }

      $qb->orderBy('j.nom');

      return $qb
        ->getQuery()
        ->getResult()
      ;

    }
    
    /**
      * Donne la valeur de la duree minimale attendue (les durees s'expriment en minutes).
      Retourne 0 s'il n'y a pas de duree minimale requise.
      */
    private function getDureeMin()
    {
      switch ($_POST['jeuDuree'])
      {
        case 1 : return 0;
        case 2 : return 20;
        case 3 : return 45;
        case 4 : return 90;
        case 5 : return 180;
      }
    }
    
    /**
      * Donne la valeur de la duree maximale attendue (les durees s'expriment en minutes).
      Retourne 0 s'il n'y a pas de duree maximale requise.
      */
    private function getDureeMax()
    {
      switch ($_POST['jeuDuree'])
      {
        case 1 : return 20;
        case 2 : return 45;
        case 3 : return 90;
        case 4 : return 180;
        case 5 : return 0;
      }
    }
    
    private function postIsSet($nom)
    {
      if (isset($_POST[$nom]))
      {
        if ($_POST[$nom] == '0') return false;
        if (strlen($_POST[$nom]) == 0) return false;
        return true;
      }
      else return false;
    }
}