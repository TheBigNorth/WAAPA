<?php namespace App\Shop\Query;

use \App\Shop\DTO\ProductDTO;
use \App\Shop\DTO\ProductCollectionDTO;
use \App\Shop\Repository\Products;
use \Illuminate\Support\Collection;
use \App\Shop\Model\Domain\MoneyAsDecimal;

class GetProductsQuery
{
    private $collection;

    public function __construct()
    {
        $products = Products::all();
        $this->collection = $this->getCollectionFromQuery($products);
    }

    private function getCollectionFromQuery(Collection  $dbProducts)
    {
        $collection = new ProductCollectionDTO();
        
        foreach ($dbProducts as $product) {
            $dto = new ProductDTO();
            $dto->id = $product->id;
            $dto->name = $product->name;
            $dto->setPrice(new MoneyAsDecimal($product->price));
            $collection[] = $dto;
        }

        return $collection;
    }

    public function collection()
    {
        return $this->collection;
    }
}