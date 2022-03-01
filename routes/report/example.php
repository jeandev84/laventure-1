<?php


$router = new \Laventure\Component\Routing\Router();

$router->module('Api\\Cabinet') // Api\Cabinet\UserController
->prefix('api/cabinet') // api/cabinet/user, api/cabinet/user/{id} ....
->name('api.cabinet.') // api.cabinet.user.list, api.cabinet.user.show
->group(function () use ($router) {
    $router->resourceAPI('user', 'UserController');
});


dd($router->getRoutes());