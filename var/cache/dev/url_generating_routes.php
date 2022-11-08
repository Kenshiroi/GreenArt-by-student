<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin_main' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_main'], [], [['text', '/admin']], [], [], []],
    'app_commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande/']], [], [], []],
    'app_commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], [], []],
    'app_commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commentaire_modele_index' => [[], ['_controller' => 'App\\Controller\\CommentaireModeleController::index'], [], [['text', '/commentaire/modele/']], [], [], []],
    'app_commentaire_modele_new' => [[], ['_controller' => 'App\\Controller\\CommentaireModeleController::new'], [], [['text', '/commentaire/modele/new']], [], [], []],
    'app_commentaire_modele_show' => [['idModele'], ['_controller' => 'App\\Controller\\CommentaireModeleController::show'], [], [['variable', '/', '[^/]++', 'idModele', true], ['text', '/commentaire/modele']], [], [], []],
    'app_commentaire_modele_edit' => [['idModele'], ['_controller' => 'App\\Controller\\CommentaireModeleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idModele', true], ['text', '/commentaire/modele']], [], [], []],
    'app_commentaire_modele_delete' => [['idModele'], ['_controller' => 'App\\Controller\\CommentaireModeleController::delete'], [], [['variable', '/', '[^/]++', 'idModele', true], ['text', '/commentaire/modele']], [], [], []],
    'app_createur_index' => [[], ['_controller' => 'App\\Controller\\CreateurController::index'], [], [['text', '/createur/']], [], [], []],
    'app_createur_new' => [[], ['_controller' => 'App\\Controller\\CreateurController::new'], [], [['text', '/createur/new']], [], [], []],
    'app_createur_show' => [['id'], ['_controller' => 'App\\Controller\\CreateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/createur']], [], [], []],
    'app_createur_edit' => [['id'], ['_controller' => 'App\\Controller\\CreateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/createur']], [], [], []],
    'app_createur_delete' => [['id'], ['_controller' => 'App\\Controller\\CreateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/createur']], [], [], []],
    'app_cree_par_index' => [[], ['_controller' => 'App\\Controller\\CreeParController::index'], [], [['text', '/cree/par/']], [], [], []],
    'app_cree_par_new' => [[], ['_controller' => 'App\\Controller\\CreeParController::new'], [], [['text', '/cree/par/new']], [], [], []],
    'app_cree_par_show' => [['idModele'], ['_controller' => 'App\\Controller\\CreeParController::show'], [], [['variable', '/', '[^/]++', 'idModele', true], ['text', '/cree/par']], [], [], []],
    'app_cree_par_edit' => [['idModele'], ['_controller' => 'App\\Controller\\CreeParController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idModele', true], ['text', '/cree/par']], [], [], []],
    'app_cree_par_delete' => [['idModele'], ['_controller' => 'App\\Controller\\CreeParController::delete'], [], [['variable', '/', '[^/]++', 'idModele', true], ['text', '/cree/par']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::main'], [], [['text', '/']], [], [], []],
    'app_search_page' => [[], ['_controller' => 'App\\Controller\\MainController::search_page'], [], [['text', '/search']], [], [], []],
    'app_search_anything' => [['searched'], ['_controller' => 'App\\Controller\\MainController::search_anything'], [], [['variable', '/', '[^/]++', 'searched', true], ['text', '/search']], [], [], []],
    'app_model_any' => [['id'], ['_controller' => 'App\\Controller\\ModelController::model_any'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/model']], [], [], []],
    'app_model_anyvariante' => [['id', 'idVariante'], ['_controller' => 'App\\Controller\\ModelController::model_anyvariante'], [], [['variable', '/', '[^/]++', 'idVariante', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/model']], [], [], []],
    'app_modele_index' => [[], ['_controller' => 'App\\Controller\\ModeleController::index'], [], [['text', '/modele/']], [], [], []],
    'app_modele_new' => [[], ['_controller' => 'App\\Controller\\ModeleController::new'], [], [['text', '/modele/new']], [], [], []],
    'app_modele_show' => [['id'], ['_controller' => 'App\\Controller\\ModeleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modele']], [], [], []],
    'app_modele_edit' => [['id'], ['_controller' => 'App\\Controller\\ModeleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modele']], [], [], []],
    'app_modele_delete' => [['id'], ['_controller' => 'App\\Controller\\ModeleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modele']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_sous_commande_index' => [[], ['_controller' => 'App\\Controller\\SousCommandeController::index'], [], [['text', '/sous/commande/']], [], [], []],
    'app_sous_commande_new' => [[], ['_controller' => 'App\\Controller\\SousCommandeController::new'], [], [['text', '/sous/commande/new']], [], [], []],
    'app_sous_commande_show' => [['idVariante'], ['_controller' => 'App\\Controller\\SousCommandeController::show'], [], [['variable', '/', '[^/]++', 'idVariante', true], ['text', '/sous/commande']], [], [], []],
    'app_sous_commande_edit' => [['idVariante'], ['_controller' => 'App\\Controller\\SousCommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idVariante', true], ['text', '/sous/commande']], [], [], []],
    'app_sous_commande_delete' => [['idVariante'], ['_controller' => 'App\\Controller\\SousCommandeController::delete'], [], [['variable', '/', '[^/]++', 'idVariante', true], ['text', '/sous/commande']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_variante_index' => [[], ['_controller' => 'App\\Controller\\VarianteController::index'], [], [['text', '/variante/']], [], [], []],
    'app_variante_new' => [[], ['_controller' => 'App\\Controller\\VarianteController::new'], [], [['text', '/variante/new']], [], [], []],
    'app_variante_show' => [['id'], ['_controller' => 'App\\Controller\\VarianteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/variante']], [], [], []],
    'app_variante_edit' => [['id'], ['_controller' => 'App\\Controller\\VarianteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/variante']], [], [], []],
    'app_variante_delete' => [['id'], ['_controller' => 'App\\Controller\\VarianteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/variante']], [], [], []],
];
