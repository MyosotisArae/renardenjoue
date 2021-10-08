<?php
namespace App\Discord;

use App\Entity\Evenement;
use App\Entity\User;
use App\Entity\Participant;

class BDD 
{
    /*
     * Sauvegarde en base de l'événement evt
     */
    public static function saveEvt($em, $evt)
    {
        $em->persist($evt);
        $em->flush();
    }

    /*
     * Sauvegarde en base du User participant à l'événement evt
     */
    public static function saveParticipant($em, $idUser, $idEvt, $nb)
    {
        $p = new Participant($idUser, $idEvt, $nb);
        $em->persist($p);
        $em->flush();
    }

    /*
     * Suppression en base du User participant à l'événement evt
     */
    public static function delParticipant($em, $p)
    {
        $em->remove($p);
        $em->flush();
    }

    /*
     * Retourne null si cet enregistrement n'existe pas dans Participant,
     * le participant sinon.
     */
    public static function ctrlParticipant($em, $idUser, $idEvt)
    {
        $p = $em->getRepository('App:Participant')
                ->get($idUser, $idEvt);
        if (count($p) > 0) return $p[0];
        return null;
    }

    /*
     * Indique le nombre de places déjà prises pour un événement.
     */
    public static function nbPlacesPrises($em, $idEvt)
    {
        $nb = $em->getRepository('App:Participant')
                 ->combienDeParticipants($idEvt);
        return $nb;
    }

    /*
     * Retourne l'événement correspondant à ce canal.
     */
    public static function getEvtByChannel($em, $channelId)
    {
        $evt = $em->getRepository('App:Evenements')
                    ->getByChannel($channelId);
        return $evt;
    }

    /*
     * Retourne l'id de l'utilisateur possédant cet identifiant discord.
     */
    public static function findUserByDiscordId($em, $userId)
    {
        $idUser = $em->getRepository('App:User')
                     ->getByDiscordId($userId);
        return $idUser;
    }

}

?>
