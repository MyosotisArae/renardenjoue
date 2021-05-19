<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\AccueilController::main'], null, null, null, false, false, null]],
        '/erreur404' => [[['_route' => 'erreur404', '_controller' => 'App\\Controller\\AdminController::erreur404'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/ajout_date' => [[['_route' => 'ajout_date', '_controller' => 'App\\Controller\\AdminController::newEvt'], null, null, null, false, false, null]],
        '/modif_date' => [[['_route' => 'modif_date', '_controller' => 'App\\Controller\\AdminController::modifEvt'], null, null, null, false, false, null]],
        '/liste_jeux' => [[['_route' => 'liste_jeux', '_controller' => 'App\\Controller\\AdminController::liste_jeux'], null, null, null, false, false, null]],
        '/renumeroter_jeux' => [[['_route' => 'renumeroter_jeux', '_controller' => 'App\\Controller\\AdminController::renumeroter_jeux'], null, null, null, false, false, null]],
        '/liste_membres' => [[['_route' => 'liste_membres', '_controller' => 'App\\Controller\\AdminController::liste_membres'], null, null, null, false, false, null]],
        '/voir_inscrip' => [[['_route' => 'voir_inscrip', '_controller' => 'App\\Controller\\AdminController::voir_inscriptions'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\CalendrierController::main'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::main'], null, null, null, false, false, null]],
        '/infos' => [[['_route' => 'infos', '_controller' => 'App\\Controller\\ContactController::infos'], null, null, null, false, false, null]],
        '/jeux' => [[['_route' => 'jeux', '_controller' => 'App\\Controller\\JeuxController::main'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/check' => [[['_route' => 'check', '_controller' => 'App\\Controller\\SecurityController::checkPassword'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\SecurityController::connecte'], null, null, null, false, false, null]],
        '/newUser' => [[['_route' => 'newUser', '_controller' => 'App\\Controller\\SecurityController::newUser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-mot-de-passe' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'vide', '_controller' => 'App\\Controller\\AccueilController::main'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::main'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|jout_jeu(\\d+)(*:187)'
                    .'|fficherEvt(\\d+)(*:210)'
                .')'
                .'|/save_(?'
                    .'|jeu(\\d+)(*:236)'
                    .'|evt_(\\d+)(*:253)'
                .')'
                .'|/de(?'
                    .'|l_(?'
                        .'|user(\\d+)(*:282)'
                        .'|evt_(\\d+)(*:299)'
                    .')'
                    .'|sinscription(\\d+)(*:325)'
                .')'
                .'|/inscription(\\d+)(*:351)'
                .'|/choisirJeu(\\d+)(*:375)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'ajout_jeu', '_controller' => 'App\\Controller\\AdminController::ajout_jeu'], ['id'], null, null, false, true, null]],
        210 => [[['_route' => 'afficherEvt', '_controller' => 'App\\Controller\\CalendrierController::afficherEvt'], ['num'], null, null, false, true, null]],
        236 => [[['_route' => 'save_jeu', '_controller' => 'App\\Controller\\AdminController::save_jeu'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'save_evt', '_controller' => 'App\\Controller\\AdminController::saveEvt'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'del_user', '_controller' => 'App\\Controller\\AdminController::del_user'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'del_evt', '_controller' => 'App\\Controller\\AdminController::del_evt'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'desinscription', '_controller' => 'App\\Controller\\CalendrierController::desinscription'], ['num'], null, null, false, true, null]],
        351 => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\CalendrierController::inscription'], ['num'], null, null, false, true, null]],
        375 => [
            [['_route' => 'choisirJeu', '_controller' => 'App\\Controller\\JeuxController::choisirJeu'], ['idJeu'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
