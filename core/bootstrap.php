<?php 
$app = [];

$app['config'] = require 'config.php';

/* require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuild.php';
 */


$app['database'] = new QueryBuild(
    Connection::make($app['config']['database'])
);