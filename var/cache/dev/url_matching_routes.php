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
        '/admin/addModel' => [[['_route' => 'app_admin_addModel', '_controller' => 'App\\Controller\\AdminController::admin_addModel'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::main'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_search_page', '_controller' => 'App\\Controller\\MainController::search_page'], null, ['GET' => 0], null, false, false, null]],
        '/panier/add' => [[['_route' => 'app_model_panier_add', '_controller' => 'App\\Controller\\ModelPanierController::model_panier_add'], null, ['GET' => 0], null, false, false, null]],
        '/panier/deleteAll' => [[['_route' => 'app_model_panier_deleteAll', '_controller' => 'App\\Controller\\ModelPanierController::model_panier_deleteAll'], null, ['GET' => 0], null, false, false, null]],
        '/panier/delete' => [[['_route' => 'app_model_panier_delete', '_controller' => 'App\\Controller\\ModelPanierController::model_panier_delete'], null, ['GET' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'app_model_panier', '_controller' => 'App\\Controller\\ModelPanierController::model_panier'], null, ['GET' => 0], null, true, false, null]],
        '/panier/commande' => [[['_route' => 'app_model_commande', '_controller' => 'App\\Controller\\ModelPanierController::model_commande'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modele' => [[['_route' => 'app_modele_index', '_controller' => 'App\\Controller\\ModeleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/modele/new' => [[['_route' => 'app_modele_new', '_controller' => 'App\\Controller\\ModeleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|addModel/([^/]++)/addVariant(*:207)'
                    .'|editModel/([^/]++)(?'
                        .'|/(?'
                            .'|addVariant(*:250)'
                            .'|delVariante/([^/]++)(*:278)'
                        .')'
                        .'|(*:287)'
                    .')'
                    .'|delModel/([^/]++)(*:313)'
                    .'|utilisateur/([^/]++)/(?'
                        .'|up(*:347)'
                        .'|d(?'
                            .'|own(*:362)'
                            .'|eban(*:374)'
                        .')'
                        .'|ban(*:386)'
                    .')'
                .')'
                .'|/model(?'
                    .'|/([^/]++)(?'
                        .'|(*:417)'
                        .'|/(?'
                            .'|\\+(*:431)'
                            .'|\\-(*:441)'
                        .')'
                    .')'
                    .'|e/([^/]++)(?'
                        .'|(*:464)'
                        .'|/edit(*:477)'
                        .'|(*:485)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:531)'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:563)'
                    .'|/edit(*:576)'
                    .'|(*:584)'
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
        207 => [[['_route' => 'app_admin_addmodel_addVariant', '_controller' => 'App\\Controller\\AdminController::admin_anymodel_addVariants'], ['idModel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_admin_editmodel_addVariant', '_controller' => 'App\\Controller\\AdminController::admin_anymodel_addVariants'], ['idModel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'app_admin_editModel_delVariante', '_controller' => 'App\\Controller\\AdminController::admin_editModel_delVariante'], ['idModel', 'idVariante'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        287 => [[['_route' => 'app_admin_editModel', '_controller' => 'App\\Controller\\AdminController::admin_editModel'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        313 => [[['_route' => 'app_admin_delModel', '_controller' => 'App\\Controller\\AdminController::admin_delModel'], ['idModel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        347 => [[['_route' => 'app_up', '_controller' => 'App\\Controller\\AdminController::admin_sa_promU'], ['user'], null, null, false, false, null]],
        362 => [[['_route' => 'app_down', '_controller' => 'App\\Controller\\AdminController::admin_sa_demoteU'], ['user'], null, null, false, false, null]],
        374 => [[['_route' => 'app_unban', '_controller' => 'App\\Controller\\AdminController::admin_a_unbanU'], ['user'], null, null, false, false, null]],
        386 => [[['_route' => 'app_ban', '_controller' => 'App\\Controller\\AdminController::admin_a_banU'], ['user'], null, null, false, false, null]],
        417 => [[['_route' => 'app_model_any', '_controller' => 'App\\Controller\\ModelController::model_any'], ['id'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'app_model_+', '_controller' => 'App\\Controller\\ModelController::model_plus'], ['id'], ['GET' => 0], null, false, false, null]],
        441 => [[['_route' => 'app_model_-', '_controller' => 'App\\Controller\\ModelController::model_moins'], ['id'], ['GET' => 0], null, false, false, null]],
        464 => [[['_route' => 'app_modele_show', '_controller' => 'App\\Controller\\ModeleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        477 => [[['_route' => 'app_modele_edit', '_controller' => 'App\\Controller\\ModeleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        485 => [[['_route' => 'app_modele_delete', '_controller' => 'App\\Controller\\ModeleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        531 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        563 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        584 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
