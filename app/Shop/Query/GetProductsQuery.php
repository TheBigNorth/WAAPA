<?php namespace App\Shop\Query;

use \App\Shop\DTO\ProductDTO;
use \App\Shop\DTO\ProductCollectionDTO;

class GetProductsQuery
{
    private $collection;

    public function __construct()
    {
        $this->collection = new ProductCollectionDTO();

        $dto = new ProductDTO();
        $dto->id = 1;
        $dto->name = 'Pyjamas';
        $dto->price = '12.50';
        $this->collection[] = $dto;

        $dto = new ProductDTO();
        $dto->id = 2;
        $dto->name = 'T-Shirt';
        $dto->price = '32.50';
        $this->collection[] = $dto;

        $dto = new ProductDTO();
        $dto->id = 3;
        $dto->name = 'Leggings';
        $dto->price = '24.50';
        $this->collection[] = $dto;
    }

    public function collection()
    {
        return $this->collection;
    }
}