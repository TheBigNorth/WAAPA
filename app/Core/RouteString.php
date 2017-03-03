<?php namespace App\Core;

class RouteString
{
    public function __construct($route, array $segments)
    {
        if (!is_string($route)) {
            throw new \Exception('$route is not a string');
        }
        return $this;
    }

    private function getWordpressParameter()
    {

    }
}