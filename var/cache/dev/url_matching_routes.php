<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/banquedesang' => [[['_route' => 'app_banque_de_sang_index', '_controller' => 'App\\Controller\\BanqueDeSangController::index'], null, ['GET' => 0], null, true, false, null]],
        '/banquedesang/liste' => [[['_route' => 'app_banque_de_sang_liste', '_controller' => 'App\\Controller\\BanqueDeSangController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/banquedesang/geo' => [[['_route' => 'app_banque_de_sang_geo', '_controller' => 'App\\Controller\\BanqueDeSangController::geo'], null, ['GET' => 0], null, false, false, null]],
        '/banquedesang/new' => [[['_route' => 'app_banque_de_sang_new', '_controller' => 'App\\Controller\\BanqueDeSangController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/map' => [[['_route' => 'app_map_index', '_controller' => 'App\\Controller\\MapController::index'], null, ['GET' => 0], null, true, false, null]],
        '/map/new' => [[['_route' => 'app_map_new', '_controller' => 'App\\Controller\\MapController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications_index', '_controller' => 'App\\Controller\\NotificationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/notifications/user' => [[['_route' => 'app_notifications_user', '_controller' => 'App\\Controller\\NotificationsController::user'], null, ['GET' => 0], null, false, false, null]],
        '/notifications/new' => [[['_route' => 'app_notifications_new', '_controller' => 'App\\Controller\\NotificationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/map/([^/]++)(?'
                    .'|(*:75)'
                    .'|/edit(*:87)'
                    .'|(*:94)'
                .')'
                .'|/notif(?'
                    .'|ications/([^/]++)(?'
                        .'|(*:131)'
                        .'|/edit(*:144)'
                        .'|(*:152)'
                    .')'
                    .'|yalert/([^/]++)(?'
                        .'|(*:179)'
                        .'|/edit(*:192)'
                        .'|(*:200)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:241)'
                    .'|wdt/([^/]++)(*:261)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:307)'
                            .'|router(*:321)'
                            .'|exception(?'
                                .'|(*:341)'
                                .'|\\.css(*:354)'
                            .')'
                        .')'
                        .'|(*:364)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_banque_de_sang_show', '_controller' => 'App\\Controller\\BanqueDeSangController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_banque_de_sang_edit', '_controller' => 'App\\Controller\\BanqueDeSangController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_banque_de_sang_delete', '_controller' => 'App\\Controller\\BanqueDeSangController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_map_show', '_controller' => 'App\\Controller\\MapController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_map_edit', '_controller' => 'App\\Controller\\MapController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_map_delete', '_controller' => 'App\\Controller\\MapController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_notifications_show', '_controller' => 'App\\Controller\\NotificationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_notifications_edit', '_controller' => 'App\\Controller\\NotificationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        152 => [[['_route' => 'app_notifications_delete', '_controller' => 'App\\Controller\\NotificationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        179 => [[['_route' => 'app_notify_alert_show', '_controller' => 'App\\Controller\\NotifyAlertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'app_notify_alert_edit', '_controller' => 'App\\Controller\\NotifyAlertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'app_notify_alert_delete', '_controller' => 'App\\Controller\\NotifyAlertController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        261 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        307 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        321 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        341 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        354 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        364 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
