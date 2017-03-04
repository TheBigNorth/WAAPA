<?= $render::partial('admin-header', []); ?>

<?= $render::partial('product-admin-header', []); ?>

<div class="container mt-4">
    <div class="">
        <div class="col-sm-4">
            <h1>Edit: </h1>
            <form method="post" action="/product/<?= $product->id; ?>">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="product-name">Product name</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="product-name" 
                        name="product-name" 
                        aria-describedby="productNameHelp" 
                        placeholder="Enter product name"
                        value="<?= $product->name; ?>">
                </div>
                <div class="form-group">
                    <label for="product-sku">Product price</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="product-price" 
                        name="product-price" 
                        aria-describedby="productPriceHelp" 
                        placeholder="Enter product price"
                        value="<?= $product->price; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $render::partial('admin-footer', []); ?>
