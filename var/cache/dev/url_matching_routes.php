<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blog(?'
                    .'|(?:/([^/]++))?(*:64)'
                    .'|/post/([^/]++)(?'
                        .'|(*:88)'
                        .'|(*:95)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'blogblog_list', 'page' => 5, '_controller' => 'App\\Controller\\BlogController::list'], ['page'], null, null, false, true, null]],
        88 => [[['_route' => 'blogblog_by_id', '_controller' => 'App\\Controller\\BlogController::post'], ['id'], null, null, false, true, null]],
        95 => [
            [['_route' => 'blogblog_by_slug', '_controller' => 'App\\Controller\\BlogController::postBySlug'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
