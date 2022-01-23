<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group([
    'prefix' => 'api/v1'
], function ($router) {
    $router->get('lists', ['uses' => 'GetAllProductAction']);
    $router->get('detail/{id}', ['uses' => 'GetProductDetailAction']);
    
});
