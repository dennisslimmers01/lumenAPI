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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/login', function () use ($app) {
    return view("login");
});

$app->get('/destroy', function () use ($app) {
    return view("destroy");
});

$app->get('/admin', function () use ($app) {
    return view("admin");
});

$app->post("/login", "LoginController@login");

$app->post("/admin", "AdminController@insertData");