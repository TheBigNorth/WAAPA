<?php namespace Waapa\Core;

class Router
{
    public static function get($url, callable $func)
    {
        $router = Route::init($_SERVER, $_GET, $_POST);
        return $router->get($url, $func);
    }
}