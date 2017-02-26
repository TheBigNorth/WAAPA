<?php namespace App\Shop\Model\ViewModel;

use \App\Shop\DTO\ProductDTO;

class ProductPageViewModel
{
    public $name;
    public $cost;

    public function __construct(ProductDTO $product)
    {
        $this->name = $product->name;
        $this->cost = $product->getPrice();
    }
}