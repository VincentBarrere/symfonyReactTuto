<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog/add' => [[['_route' => 'blogblog_add', '_controller' => 'App\\Controller\\BlogController::add'], null, ['POST' => 0], null, false, false, null]],
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blog(?'
                    .'|(?:/(\\d+))?(*:61)'
                    .'|/post/(?'
                        .'|(\\d+)(*:82)'
                        .'|([^/]++)(*:97)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'blogblog_list', 'page' => 5, '_controller' => 'App\\Controller\\BlogController::list'], ['page'], null, null, false, true, null]],
        82 => [[['_route' => 'blogblog_by_id', '_controller' => 'App\\Controller\\BlogController::post'], ['id'], null, null, false, true, null]],
        97 => [
            [['_route' => 'blogblog_by_slug', '_controller' => 'App\\Controller\\BlogController::postBySlug'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
