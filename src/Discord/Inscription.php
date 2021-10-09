<?php

namespace App\Discord;

/**
 * Représente une inscription:
 * - nom du participant (pseudo du site)
 * - nom sur discord
 * - nombre d'invités (lui inclus)
 */
class Inscription
{
    public $nomSite;
    public $nomDiscord;
    public $nb;
    
    public function __construct()
    {
        $this->nomSite = '';
        $this->nomDiscord = '';
        $this->nb = 0;
    }
}
