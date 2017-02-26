<?php namespace App\Shop\Model\Domain;

class PageId
{
    private $id;

    public function __construct($id)
    {
        if (is_integer($id)) {
            $this->id = $id;
        } else {
            throw new \Exception('Page id is not an integer');
        }
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}