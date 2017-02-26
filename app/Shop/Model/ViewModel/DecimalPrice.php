<?php namespace App\Shop\Model\ViewModel;

class DecimalPrice
{
    public $price;
    
    public function __construct($price)
    {
        if (strlen($price) > 2) {
            $stringLength = strlen($price);
            $positionMinusTwoPlaces = $stringLength - 2;
            $this->price = substr_replace($price, '.', $positionMinusTwoPlaces, 0);
        } else {
            $this->price = '0.' . $price;
        }
    }

    public function __toString()
    {
        return $this->price;
    }
}