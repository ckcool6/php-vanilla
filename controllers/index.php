<?php

$tasks = $querry->selectAll('todos');

//
require 'views/index.view.php';