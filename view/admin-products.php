<div class="wrap">
    <table>
        <thead>
            <tr>
                <td>Item</td>
                <td>Price</td>
                <td>Status</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $product) : ?>
            <tr>
                <td><?= $product->name; ?></td>
                <td>£ <?= $product->getPrice(); ?> GBP</td>
                <td>On display</td>
                <td>
                    <form method="post" action="<?= remove_query_arg('action'); ?>">
                        <input type="hidden" name="id" value="<?= $product->id; ?>" />
                        <input type="hidden" name="action" value="stopSelling" />
                        <button>Stop selling</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= add_query_arg('action', 'addNewProduct'); ?>">Add New Product</a>
</div>