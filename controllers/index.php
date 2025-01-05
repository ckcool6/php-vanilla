<?php

$tasks = $app['database']->selectall('todos');

//
require 'views/index.view.php';