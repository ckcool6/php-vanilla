<?php

$querry = require 'core/bootstrap.php';

$router = new Router();


$uri = trim($_SERVER['REQUEST_URI'],'/');
//var_dump($uri);

require Router::load('routes.php')->direct($uri);