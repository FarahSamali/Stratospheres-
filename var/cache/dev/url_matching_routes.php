<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/afficherart' => [[['_route' => 'display_liste', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/addarticle' => [[['_route' => 'addarticle', '_controller' => 'App\\Controller\\ArticleController::addart'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\ArticleController::base'], null, null, null, false, false, null]],
        '/afficherrec' => [[['_route' => 'rec_liste', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/addrecl' => [[['_route' => 'addrecl', '_controller' => 'App\\Controller\\ReclamationController::addreclamation'], null, null, null, false, false, null]],
        '/afficherrecadm' => [[['_route' => 'rec_listeadm', '_controller' => 'App\\Controller\\ReclamationController::listadm'], null, null, null, false, false, null]],
        '/frt' => [[['_route' => 'frt', '_controller' => 'App\\Controller\\ReclamationController::frt'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/supprimer(?'
                    .'|art/([^/]++)(*:32)'
                    .'|rec/([^/]++)(*:51)'
                .')'
                .'|/modifier(?'
                    .'|article/([^/]++)(*:87)'
                    .'|rec/([^/]++)(*:106)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:146)'
                    .'|wdt/([^/]++)(*:166)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:212)'
                            .'|router(*:226)'
                            .'|exception(?'
                                .'|(*:246)'
                                .'|\\.css(*:259)'
                            .')'
                        .')'
                        .'|(*:269)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'supp', '_controller' => 'App\\Controller\\ArticleController::deleteart'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'supprec', '_controller' => 'App\\Controller\\ReclamationController::deleterec'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'modifierarticle', '_controller' => 'App\\Controller\\ArticleController::modifierarticle'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'modifierrec', '_controller' => 'App\\Controller\\ReclamationController::modifierrec'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        166 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        212 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        226 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        246 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        269 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
