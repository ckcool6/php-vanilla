<?php

$router->get('test', 'controllers/index.php');
$router->get('test/about', 'controllers/about.php');
$router->get('test/contact', 'controllers/about-culture.php');
$router->post('test/names', 'controllers/add-name.php');