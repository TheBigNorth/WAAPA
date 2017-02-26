<?php namespace App\Shop\Model\Domain;

use \App\Shop\Model\Domain\MoneyAsDecimal;

class Product
{

    private $name;
    private $price;

    private function __construct($name, MoneyAsDecimal $price)
    {
        $this->name = $name;
        $this->price = $price->asFloat();
    }

    public static function register($name, MoneyAsDecimal $price)
    {
        return new self($name, $price);
    }

    public function name()
    {
        return $this->name;
    }

    public function price()
    {
        return $this->price;
    }

}