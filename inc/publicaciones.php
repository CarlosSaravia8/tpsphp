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

/**
 * Elimina un post
 *
 * @param $id
 */
function delete_post( $id ) {
	global $app_db;

	$result = $app_db->query( "DELETE FROM publicaciones WHERE id = $id" );
}

/**
 * Inserta una nueva tarea
 *
 * @param $title
 * @param $excerpt
 * @param $content
 */
function insert_post( $titulo, $resumen, $contenido ) {
	global $app_db;

	$published_on = date( 'Y-m-d H:i:s' );

	$title = $app_db->real_escape_string( $titulo);
	$excerpt = $app_db->real_escape_string( $resumen );
	$content = $app_db->real_escape_string( $contenido );

	$query = "INSERT INTO publicaciones
	( titulo, resumen, contenido, fecha_publicacion )
	VALUES ( '$title', '$excerpt', '$content', '$published_on' )";

	$result = $app_db->query( $query );
}

?>