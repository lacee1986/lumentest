<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* @var $router \Laravel\Lumen\Routing\Router */

// Homepage
$router->get('/', function () {
    return view('pages.homepage');
});

// About 
$router->get('about', function () {
    return view('pages.about');
});

// Get data
$router->get('/{region}/{server}/{character}', 'DefaultController@getCharacter');