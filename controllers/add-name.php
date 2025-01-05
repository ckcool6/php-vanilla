<?php

$app['database']->insert('todos', [
    'description' => $_POST['name'],
    'completed' => 0,
]);

header('Location: /test');