//<?php

//echo "ini basdat";

//$db_connection = pg_connect("host=pgdevelopment.c5vulavebd4f.ap-southeast-1.rds.amazonaws.com:5432 dbname=TOKOKEREN user=muhammad_kamal password=!23Qweasd");
//$result = pg_query($db_connection, "SELECT * FROM pengguna");

//echo $result;
//?>

<?php


define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'basdat' . DIRECTORY_SEPARATOR);
define('APP', ROOT);


// load application config
require APP . 'config/config.php';


// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';

$app = new Application();
