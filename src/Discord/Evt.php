<?php
namespace App\Discord;

class Evt
{
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
