<?php

/**
 * Devuelve todo el listado de posts
 */
function get_all_posts() {
	global $app_db;
	$result = $app_db->query( "SELECT * FROM publicaciones" );
	return $app_db->fetch_all( $result );
}