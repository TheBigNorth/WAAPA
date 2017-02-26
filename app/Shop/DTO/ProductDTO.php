<?php namespace App\Shop\DTO;

use \App\Shop\Model\Domain\MoneyAsDecimal;

class ProductDTO
{
    public $id;
    public $name;
    private $price;

    public function setPrice(MoneyAsDecimal $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}