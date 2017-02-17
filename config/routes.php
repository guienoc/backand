<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Site', 'action' => 'index']);
    $routes->connect('/registrar', ['controller' => 'Site', 'action' => 'registrar']);
    $routes->connect('/faq', ['controller' => 'Site', 'action' => 'faq']);
    $routes->connect('/contato', ['controller' => 'Site', 'action' => 'contato']);
    $routes->connect('/servicos', ['controller' => 'Site', 'action' => 'servicos']);
    $routes->connect('/suporte', ['controller' => 'Site', 'action' => 'suporte']);
    $routes->connect('/area-do-cliente', ['controller' => 'Site', 'action' => 'areaDoCliente']);
    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('admin', function($routes) {
    $routes->connect('/', ['controller' => 'Painel', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
