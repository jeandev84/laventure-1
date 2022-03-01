<?php
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Facade\Routing\Route;


/*
|----------------------------------------------------------------------
|           Registration all web routes
|----------------------------------------------------------------------
*/



Route::get('/', 'FrontController@home', 'homepage');
Route::get('/about', 'FrontController@about', 'about');
Route::map('GET|POST', '/contact', 'FrontController@contact', 'contact');
Route::map('GET', '/portfolio', 'FrontController@portfolio', 'portfolio');


Route::get('/welcome', function () {
    return new Response("Welcome to Laventure framework.");
});




