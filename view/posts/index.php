<?= $render::partial('header', []); ?>

<?php foreach ($posts as $post) : ?>
    <h3><?= $post->post_title; ?></h3>
    <?= $post->post_content; ?>
    <a href="<?= $post->post_name; ?>">Read</a>
<?php endforeach; ?>

<?= $render::partial('footer', []); ?>