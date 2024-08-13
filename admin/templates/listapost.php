<?php require __DIR__ . '/../../templates/header.php';?>

<?php if (isset($_GET['success'])):?>
<div class="success">
    El post ha sido creado
</div>
<?php endif;?>

<table>
    <?php foreach ($all_posts as $post): ?>
    <tr>
        <td><?php echo $post['titulo']; ?></td>
        <td><a
                href="<?php echo SITE_URL . '/admin?action=listado-post&delete-post=' . $post['id'] ?>&hash=<?php echo generate_hash('delete-post-' . $post['id']); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<?php require __DIR__ . '/../../templates/footer.php';?>