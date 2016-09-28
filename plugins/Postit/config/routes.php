<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Postit',
    ['path' => '/posts'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
