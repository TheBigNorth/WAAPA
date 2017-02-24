<?php namespace App\Shop\DTO;

class ProductDTO
{
    public $id;
    public $name;
    public $price;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}