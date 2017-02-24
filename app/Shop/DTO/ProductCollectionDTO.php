<?php namespace App\Shop\DTO;

class ProductCollectionDTO extends \ArrayObject {
    public function offsetSet($key, $val) {
        if ($val instanceof ProductDTO) {
            return parent::offsetSet($key, $val);
        }
        throw new InvalidArgumentException('Value must be a ProductDTO');
    }
}