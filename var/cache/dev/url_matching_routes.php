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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_main', '_controller' => 'App\\Controller\\AdminController::admin_main'], null, ['GET' => 0], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire/modele' => [[['_route' => 'app_commentaire_modele_index', '_controller' => 'App\\Controller\\CommentaireModeleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/modele/new' => [[['_route' => 'app_commentaire_modele_new', '_controller' => 'App\\Controller\\CommentaireModeleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/createur' => [[['_route' => 'app_createur_index', '_controller' => 'App\\Controller\\CreateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/createur/new' => [[['_route' => 'app_createur_new', '_controller' => 'App\\Controller\\CreateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cree/par' => [[['_route' => 'app_cree_par_index', '_controller' => 'App\\Controller\\CreeParController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cree/par/new' => [[['_route' => 'app_cree_par_new', '_controller' => 'App\\Controller\\CreeParController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::main'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_search_page', '_controller' => 'App\\Controller\\MainController::search_page'], null, ['GET' => 0], null, false, false, null]],
        '/modele' => [[['_route' => 'app_modele_index', '_controller' => 'App\\Controller\\ModeleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/modele/new' => [[['_route' => 'app_modele_new', '_controller' => 'App\\Controller\\ModeleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sous/commande' => [[['_route' => 'app_sous_commande_index', '_controller' => 'App\\Controller\\SousCommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sous/commande/new' => [[['_route' => 'app_sous_commande_new', '_controller' => 'App\\Controller\\SousCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/me' => [[['_route' => 'app_user_me', '_controller' => 'App\\Controller\\UserController::user_me'], null, ['GET' => 0], null, false, false, null]],
        '/user/login' => [[['_route' => 'app_user_login', '_controller' => 'App\\Controller\\UserController::user_login'], null, ['GET' => 0], null, false, false, null]],
        '/user/signin' => [[['_route' => 'app_user_signin', '_controller' => 'App\\Controller\\UserController::user_signin'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/variante' => [[['_route' => 'app_variante_index', '_controller' => 'App\\Controller\\VarianteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/variante/new' => [[['_route' => 'app_variante_new', '_controller' => 'App\\Controller\\VarianteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|omm(?'
                        .'|ande/([^/]++)(?'
                            .'|(*:196)'
                            .'|/edit(*:209)'
                            .'|(*:217)'
                        .')'
                        .'|entaire/modele/([^/]++)(?'
                            .'|(*:252)'
                            .'|/edit(*:265)'
                            .'|(*:273)'
                        .')'
                    .')'
                    .'|re(?'
                        .'|ateur/([^/]++)(?'
                            .'|(*:305)'
                            .'|/edit(*:318)'
                            .'|(*:326)'
                        .')'
                        .'|e/par/([^/]++)(?'
                            .'|(*:352)'
                            .'|/edit(*:365)'
                            .'|(*:373)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|earch/([^/]++)(*:403)'
                    .'|ous/commande/([^/]++)(?'
                        .'|(*:435)'
                        .'|/edit(*:448)'
                        .'|(*:456)'
                    .')'
                .')'
                .'|/model(?'
                    .'|/([^/]++)(?'
                        .'|(*:487)'
                        .'|/([^/]++)(*:504)'
                    .')'
                    .'|e/([^/]++)(?'
                        .'|(*:526)'
                        .'|/edit(*:539)'
                        .'|(*:547)'
                    .')'
                .')'
                .'|/u(?'
                    .'|ser/([^/]++)(*:574)'
                    .'|tilisateur/([^/]++)(?'
                        .'|(*:604)'
                        .'|/edit(*:617)'
                        .'|(*:625)'
                    .')'
                .')'
                .'|/variante/([^/]++)(?'
                    .'|(*:656)'
                    .'|/edit(*:669)'
                    .'|(*:677)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_commentaire_modele_show', '_controller' => 'App\\Controller\\CommentaireModeleController::show'], ['idModele'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'app_commentaire_modele_edit', '_controller' => 'App\\Controller\\CommentaireModeleController::edit'], ['idModele'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'app_commentaire_modele_delete', '_controller' => 'App\\Controller\\CommentaireModeleController::delete'], ['idModele'], ['POST' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_createur_show', '_controller' => 'App\\Controller\\CreateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_createur_edit', '_controller' => 'App\\Controller\\CreateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'app_createur_delete', '_controller' => 'App\\Controller\\CreateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_cree_par_show', '_controller' => 'App\\Controller\\CreeParController::show'], ['idModele'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_cree_par_edit', '_controller' => 'App\\Controller\\CreeParController::edit'], ['idModele'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'app_cree_par_delete', '_controller' => 'App\\Controller\\CreeParController::delete'], ['idModele'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => 'app_search_anything', '_controller' => 'App\\Controller\\MainController::search_anything'], ['searched'], ['GET' => 0], null, false, true, null]],
        435 => [[['_route' => 'app_sous_commande_show', '_controller' => 'App\\Controller\\SousCommandeController::show'], ['idVariante'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'app_sous_commande_edit', '_controller' => 'App\\Controller\\SousCommandeController::edit'], ['idVariante'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'app_sous_commande_delete', '_controller' => 'App\\Controller\\SousCommandeController::delete'], ['idVariante'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'app_model_any', '_controller' => 'App\\Controller\\ModelController::model_any'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'app_model_anyvariante', '_controller' => 'App\\Controller\\ModelController::model_anyvariante'], ['id', 'idVariante'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'app_modele_show', '_controller' => 'App\\Controller\\ModeleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_modele_edit', '_controller' => 'App\\Controller\\ModeleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_modele_delete', '_controller' => 'App\\Controller\\ModeleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_user_anyone', '_controller' => 'App\\Controller\\UserController::user_anyone'], ['id'], ['GET' => 0], null, false, true, null]],
        604 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        656 => [[['_route' => 'app_variante_show', '_controller' => 'App\\Controller\\VarianteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        669 => [[['_route' => 'app_variante_edit', '_controller' => 'App\\Controller\\VarianteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        677 => [
            [['_route' => 'app_variante_delete', '_controller' => 'App\\Controller\\VarianteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
