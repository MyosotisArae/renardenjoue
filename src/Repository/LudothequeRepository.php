<?php
namespace App\Repository;

use App\Entity\Ludotheque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use \DateTime;
use \DateInterval;

class LudothequeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ludotheque::class);
    }

    ///////////////////////////////////////////////////////////////////////////////
    //                              Mes requetes                                 //
    ///////////////////////////////////////////////////////////////////////////////

    // Retourne les jeux dans l'ordre alphabétique.
    /**
      * @return Ludotheque[]
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
    
    // Retourne les jeux dans l'ordre des index, donc dans l'ordre d'ajout en base.
    // Sert pour la renumerotation des index.
    /**
      * @return Ludotheque[]
      */
      public function getJeuxChronologiquement()
      {
        $qb = $this->createQueryBuilder('j');
        $qb->orderBy('j.id');
  
        return $qb
          ->getQuery()
          ->getResult()
        ;
  
      }
        
    /**
      * Donne la valeur de la duree minimale attendue (les durees s'expriment en minutes).
      * Retourne 0 s'il n'y a pas de duree minimale requise.
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
      * Retourne 0 s'il n'y a pas de duree maximale requise.
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

    // Retourne les derniers jeux de la base de données
    /**
      * @return Liste de jeux
      */
    public function getLastGame(): array
    {
      $liste = $this->findBy(
        array(),              // Critère
        array('id' => 'desc'),// Tri
        3,                    // Limite : les 3 premiers (donc les 3 derniers car la liste est en ordre inverse)
        0                     // Offset
      );
      
      return $liste;
    }

    // Retourne le jeu demandé ou null.
    /**
      * @return un jeu
      */
    public function getGame(int $id)
    {
      $liste = $this->findById($id);
      if (count($liste) == 1) return $liste[0];
      
      return null;
    }

    // Sauvegarde le jeu depuis qu'affiche l'editeur de l'administrateur.
    /**
      * @return Ludotheque
      */
    public function saveJeu(int $id)
    {
      // Récupération du jeu (en cas d'update)
      $jeu = $this->getGame($id);
      // Création du jeu (en cas d'insert)
      if ($jeu == null) { $jeu = new Ludotheque(); }

      // Prise en compte des infos saisies dans l'interface
      $jeu->setNom($_POST["chNom"]);
      $jeu->setNomComplet($_POST["chFull"]);
      $jeu->setImg($_POST["chImg"]);
      $jeu->setBut($_POST["chBut"]);
      $jeu->setPpe($_POST["chDesc"]);
      $jeu->setNbjmin($_POST["chNbJmin"]);
      $jeu->setNbjmax($_POST["chNbJmax"]);
      $jeu->setDureemin($_POST["chDureemin"]);
      $jeu->setDureemax($_POST["chDureemax"]);
      $jeu->setDominance($_POST["chDom"]);

      // Les mécanismes sont récupérés dans des checkbox.
      // POST devrait être null pour celles non cochées.
      // Les autres seront ajoutées au meca.
      $meca = 0;
      $listeMeca = $jeu->getListeMecanismes();
      foreach ($listeMeca as $cle => $valeur)
      {
        // Checkbox existante = case cochee
        // La cle est dans ce cas ajoutee au champ de bits $meca.
        if ($this->postIsSet("cb".$cle)) $meca += $cle;
      }
      $jeu->setMeca($meca);

      return $jeu;  
    }
  
    /**
     * Passe à l'image suivante si c'est possible.
     */
    public function nextImage()
    {
      // Changer le numero de l'image courante.
      $nb = $this->getNbImg();
      if ($nb = 1) return; // Pas d'autre image.
      $numero = $this->getIndiceImg();
      $numero = ($numero + 1) % $nb;
      $this->setIndiceImg($numero);
      // Changer le nom du fichier image.
      $nomFichierImage = $this->getImg();               // ancien nom
      $nomFichierImage = substr($nomFichierImage,0,-5); // moins le xxixx de la fin
      $nomFichierImage .= $numero . 'i' . $nb;          // plus xxixx avec le numero suivant.
      $nomFichierImage = $this->setImg($nomFichierImage);
    }
}