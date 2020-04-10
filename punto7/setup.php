<?php

include 'core/router.php';
include 'model/ap.model.php';
include 'model/serialize.model.php';
include 'model/ap.list.model.php';
include 'controller/ap.controller.php';

use App\core\Router;

$router = new Router;
$router->define([
    'GET /' => 'ApController@index',
    'GET /new_appointment' => 'ApController@newAp',
    'POST /save_appointment' => 'ApController@saveAp',
    'GET /list_appointments' => 'ApController@listAp',
    'GET /view_appointment' => 'ApController@viewAp',
]);
