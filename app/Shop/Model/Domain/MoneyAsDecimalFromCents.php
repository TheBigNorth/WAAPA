<?php namespace App\Shop\Model\Domain;

class MoneyAsDecimalFromCents extends MoneyAsDecimal
{   
    public function __construct($priceAsCents)
    {
        if (!is_integer($priceAsCents)) {
            throw new \Exception('$priceAsCents is not an integer');
        }
        
        $stringLength = strlen($priceAsCents);

        if ($stringLength > 2) {
            $positionMinusTwoPlaces = $stringLength - 2;
            $this->price = substr_replace($priceAsCents, '.', $positionMinusTwoPlaces, 0);
        } else {
            $this->price = '0.' . $priceAsCents;
        }
    }
}