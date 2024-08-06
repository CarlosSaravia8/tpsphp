<?php

/**
 * Devuelve todo el listado de posts
 */
function get_all_posts() {
	global $app_db;
	$result = $app_db->query( "SELECT * FROM publicaciones" );
	return $app_db->fetch_all( $result );
}

/**
 * Busca y devuelve un sólo post
 * Si no lo encuentra, devuelve false
 */
function get_post( $post_id ) {
	global $app_db;

	$post_id = intval( $post_id );

	$query = "SELECT * FROM publicaciones WHERE id = " . $post_id;
	$result = $app_db->query( $query );

	return $app_db->fetch_assoc( $result );
}

?>