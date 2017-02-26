<?php namespace App\Shop\Query;

use \App\Shop\DTO\ProductDTO;
use \App\Shop\Repository\Products;
use \Illuminate\Support\Collection;
use \App\Shop\Model\Domain\PageId;
use \App\Shop\Model\Domain\MoneyAsDecimal;

class GetProductQuery
{
    private $item;

    public function __construct(PageId $productId)
    {
        $product = Products::where('id', $productId)->first();
        $this->setItemDTO($product);
    }

    private function setItemDTO(Products $product)
    {
        $dto = new ProductDTO();
        $dto->id = $product->id;
        $dto->name = $product->name;
        $dto->setPrice(new MoneyAsDecimal($product->price));
        $this->item = $dto;
    }

    public function item()
    {
        return $this->item;
    }
}