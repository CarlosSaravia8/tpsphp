<?php require('init.php');?>

<?php

$all_posts = get_all_posts();

$post_found = false;
if ( isset( $_GET['view'] ) ) {
	$post_found = get_post( $_GET['view'] );
	if ( $post_found ) {
		$all_posts = [ $post_found ];
	}
}

?>

<?php require('templates/header.php') ?>

<div class="posts">
		<?php foreach ( $all_posts as $post ): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="?view=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a>
					</h2>
				</header>
				<div class="post-content">
					<?php if ( $post_found ): ?>
						<?php echo $post['resumen']; ?>
					<?php else: ?>
						<?php echo $post['resumen']; ?>
					<?php endif; ?>
				</div>
				<footer>
					<span class="post-date">
						Publicada en:
						<?php	echo date( 'd F Y', strtotime( $post['fecha_publicacion'] ) );	?>
					</span>
				</footer>
			</article>
		<?php endforeach; ?>
	</div>.


<?php require('templates/footer.php') ?>

