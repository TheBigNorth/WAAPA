<?php include __DIR__ . '/../partials/header.php'; ?>

<h1>Our Terribly Wonderful Machine Products</h1>
<div class="">
    <?php foreach($data->products as $product) : ?>
        <div>
            <h3>Product: <?= $product->name; ?></h3>
            Cost: £<?= $product->price; ?>
            <a href="/product/<?= $product->id; ?>">View</a>
            <hr/>
        </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>