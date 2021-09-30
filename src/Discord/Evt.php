<?php
namespace App\Discord;

class Evt
{
    public function __construct()
    {
    }

    public function ajouter($em)
    {
        $nextEvts = $em->getRepository('App:Evenements')
                       ->getNextEvts();
        echo "Prochains evts :", PHP_EOL;
        var_dump($nextEvts);
    }

    public static function afficherProchainsEvts($em)
    {
        $nextEvts = $em->getRepository('App:Evenements')
                       ->getNextEvts();
        echo "Prochains evts :", PHP_EOL;
        var_dump($nextEvts);
    }

    public static function ajouterEvt($em)
    {
        $json = "{        }";
        var_dump(json_decode($json));
    }
}

?>
