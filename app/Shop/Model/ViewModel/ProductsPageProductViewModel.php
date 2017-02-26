<?php namespace App\Shop\Model\ViewModel;

use \App\Shop\DTO\ProductDTO;

class ProductsPageProductViewModel
{
    public $id;
    public $name;
    public $price;

    public function __construct(ProductDTO $product)
    {
        $this->name = $product->name;
        $this->id = $product->id;
        $this->price = $product->getPrice();
    }
}