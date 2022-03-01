<?php
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Facade\Routing\Route;


/*
|----------------------------------------------------------------------
|           Registration all web routes
|----------------------------------------------------------------------
*/



Route::get('/', 'SiteController@home', 'homepage');
Route::get('/about', 'SiteController@about', 'about');
Route::map('GET|POST', '/contact', 'SiteController@contact', 'contact');



$options = [
    'prefix' => 'admin/',
    'module' => 'Admin\\',
    'name'   => 'admin.'
];

Route::group(function () {
    Route::get('/', 'DashboardController@index', 'dashboard');
    Route::get('/users', 'UserController@index', 'users');
}, $options);