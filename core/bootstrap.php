<?php 
require 'core/database/connection.php';
require 'core/database/QueryBuild.php';
require 'core/Router.php';
$config = require 'config.php';


return new QueryBuild(
    Connection::make($config['database'])
);