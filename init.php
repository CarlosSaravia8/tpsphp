<?php

if ( ! file_exists( __DIR__ . '/config.php' ) ) {
	die( 'ERROR:No existe config.php' );
}

require 'config.php';
require ('inc/publicaciones.php');
require ('inc/class-db.php');
$app_db = new DB( DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT );
?>
