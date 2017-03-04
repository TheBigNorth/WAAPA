<?= $render::partial('header', []); ?>

<?php foreach ($products as $product) : ?>
    <h3><?= $product->name; ?></h3>
    £ <?= $product->price; ?>
    <a href="/products/<?= $product->id; ?>">View details</a>
<?php endforeach; ?>

<?= $render::partial('footer', []); ?>