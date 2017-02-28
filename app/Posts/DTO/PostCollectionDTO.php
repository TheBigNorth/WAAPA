<?php namespace App\Shop\DTO;

class PostCollectionDTO extends \ArrayObject {
    public function offsetSet($key, $val) {
        if ($val instanceof PostDTO) {
            return parent::offsetSet($key, $val);
        }
        throw new InvalidArgumentException('Value must be a PostDTO');
    }
}