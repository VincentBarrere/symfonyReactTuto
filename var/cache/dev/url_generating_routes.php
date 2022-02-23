<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'blogblog_list' => [['page'], ['page' => 5, '_controller' => 'App\\Controller\\BlogController::list'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/blog']], [], [], []],
    'blogblog_by_id' => [['id'], ['_controller' => 'App\\Controller\\BlogController::post'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/post']], [], [], []],
    'blogblog_by_slug' => [['slug'], ['_controller' => 'App\\Controller\\BlogController::postBySlug'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/blog/post']], [], [], []],
    'blogblog_add' => [[], ['_controller' => 'App\\Controller\\BlogController::add'], [], [['text', '/blog/add']], [], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], [], []],
];
