<?php namespace App\Shop\Model\Domain;

class MoneyAsDecimal
{
    public $price;

    public function __construct($price)
    {
        if (!is_numeric($price)) {
            throw new \Exception('$price is not numeric');
        }

        if (strpos($price, '.')  === -1) {
            $price = $price . '.00';
        }
        
        $this->price = $price;
    }

    public function __toString()
    {
        return (string) $this->price;
    }

    public function asFloat()
    {
        return floatval((string) $this->price);
    }
}