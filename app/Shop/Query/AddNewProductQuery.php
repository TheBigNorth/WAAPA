<?php namespace App\Shop\Query;

use \App\Shop\Repository\Products;
use \Illuminate\Support\Collection;
use \App\Shop\Model\Domain\Product;

class AddNewProductQuery
{
    private $item;

    public function __construct(Product $product)
    {
        $item = new Products;

        $item->name = $product->name();
        $item->price = $product->price();
        $item->save();
    }

}