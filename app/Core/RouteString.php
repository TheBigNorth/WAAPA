<?php namespace App\Core;

class RouteString
{
    public function __construct($route)
    {
        if (!is_string($route)) {
            throw new \Exception('$route is not a string');
        }
    }

    private function getRequestObject($route)
    {
        
    }

    private function getParameterFromURL($url)
    {

    }
}