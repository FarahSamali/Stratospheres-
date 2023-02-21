<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/banquedesang' => [[['_route' => 'app_banque_de_sang_index', '_controller' => 'App\\Controller\\BanqueDeSangController::index'], null, ['GET' => 0], null, true, false, null]],
        '/banquedesang/new' => [[['_route' => 'app_banque_de_sang_new', '_controller' => 'App\\Controller\\BanqueDeSangController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/notifyalert' => [[['_route' => 'app_notify_alert_index', '_controller' => 'App\\Controller\\NotifyAlertController::index'], null, ['GET' => 0], null, true, false, null]],
        '/notifyalert/new' => [[['_route' => 'app_notify_alert_new', '_controller' => 'App\\Controller\\NotifyAlertController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/banquedesang/([^/]++)(?'
                    .'|(*:32)'
                    .'|/edit(*:44)'
                    .'|(*:51)'
                .')'
                .'|/notifyalert/([^/]++)(?'
                    .'|(*:83)'
                    .'|/edit(*:95)'
                    .'|(*:102)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:142)'
                    .'|wdt/([^/]++)(*:162)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:208)'
                            .'|router(*:222)'
                            .'|exception(?'
                                .'|(*:242)'
                                .'|\\.css(*:255)'
                            .')'
                        .')'
                        .'|(*:265)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_banque_de_sang_show', '_controller' => 'App\\Controller\\BanqueDeSangController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_banque_de_sang_edit', '_controller' => 'App\\Controller\\BanqueDeSangController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_banque_de_sang_delete', '_controller' => 'App\\Controller\\BanqueDeSangController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_notify_alert_show', '_controller' => 'App\\Controller\\NotifyAlertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_notify_alert_edit', '_controller' => 'App\\Controller\\NotifyAlertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_notify_alert_delete', '_controller' => 'App\\Controller\\NotifyAlertController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        142 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        162 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        222 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        242 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        255 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        265 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
