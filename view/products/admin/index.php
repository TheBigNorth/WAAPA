<?= $render::partial('admin-header', []); ?>

<?= $render::partial('product-admin-header', []); ?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product->id; ?></td>
                        <td><?= $product->name; ?></td>
                        <td>213012380128</td>
                        <td>£<?= $product->price; ?></td>
                        <td>
                            <a href="/admin/products/edit/<?= $product->id; ?>" class="btn btn-default">
                                Edit
                            </a>
                        </td>
                        <td><button>Remove from display</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $render::partial('admin-footer', []); ?>
