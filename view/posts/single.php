<?= $render::partial('header', []); ?>

<h1>Post: <?= $page->post_title; ?></h1>
<?= $page->post_content; ?>

<?= $render::partial('footer', []); ?>