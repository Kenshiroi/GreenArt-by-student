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
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/createur' => [[['_route' => 'app_createur_index', '_controller' => 'App\\Controller\\CreateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/createur/new' => [[['_route' => 'app_createur_new', '_controller' => 'App\\Controller\\CreateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modele' => [[['_route' => 'app_modele_index', '_controller' => 'App\\Controller\\ModeleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/modele/new' => [[['_route' => 'app_modele_new', '_controller' => 'App\\Controller\\ModeleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sous/commande' => [[['_route' => 'app_sous_commande_index', '_controller' => 'App\\Controller\\SousCommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sous/commande/new' => [[['_route' => 'app_sous_commande_new', '_controller' => 'App\\Controller\\SousCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|ommande/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|reateur/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                .')'
                .'|/modele/([^/]++)(?'
                    .'|(*:292)'
                    .'|/edit(*:305)'
                    .'|(*:313)'
                .')'
                .'|/sous/commande/([^/]++)(?'
                    .'|(*:348)'
                    .'|/edit(*:361)'
                    .'|(*:369)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:395)'
                    .'|/edit(*:408)'
                    .'|(*:416)'
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
        193 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_createur_show', '_controller' => 'App\\Controller\\CreateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_createur_edit', '_controller' => 'App\\Controller\\CreateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_createur_delete', '_controller' => 'App\\Controller\\CreateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_modele_show', '_controller' => 'App\\Controller\\ModeleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_modele_edit', '_controller' => 'App\\Controller\\ModeleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_modele_delete', '_controller' => 'App\\Controller\\ModeleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        348 => [[['_route' => 'app_sous_commande_show', '_controller' => 'App\\Controller\\SousCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_sous_commande_edit', '_controller' => 'App\\Controller\\SousCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'app_sous_commande_delete', '_controller' => 'App\\Controller\\SousCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
