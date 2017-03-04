<?= $render::partial('admin-header', []); ?>

<?= $render::partial('product-admin-header', []); ?>

<div class="container mt-4">
    <div class="">
        <div class="col-sm-4">
            <form method="post" action="/product">
                <div class="form-group">
                    <label for="product-name">Product name</label>
                    <input type="text" class="form-control" id="product-name" name="product-name" aria-describedby="productNameHelp" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="product-sku">Product price</label>
                    <input type="text" class="form-control" id="product-price" name="product-price" aria-describedby="productPriceHelp" placeholder="Enter product price">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

<?= $render::partial('admin-footer', []); ?>
