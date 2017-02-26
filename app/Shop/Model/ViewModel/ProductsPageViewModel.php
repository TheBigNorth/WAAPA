<?php namespace App\Shop\Model\ViewModel;

use \App\Shop\DTO\ProductCollectionDTO;

class ProductsPageViewModel
{
    public $products = [];

    public function __construct(ProductCollectionDTO $products)
    {
        $this->mapProductsFromDTOToViewModel($products);
    }

    private function mapProductsFromDTOToViewModel(ProductCollectionDTO $products)
    {
        foreach ($products as $product) {
            $this->products[] = new ProductsPageProductViewModel($product);
        }
    }
}