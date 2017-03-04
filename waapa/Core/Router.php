<?php namespace Waapa\Core;

class Router
{
    public static function get($url, callable $func, array $middlewearOptions = [])
    {
        $router = new Route($_SERVER, $_GET, $_POST);
        return $router->get($url, $func, $middlewearOptions);
    }

    public static function post($url, callable $func, array $middlewearOptions = [])
    {
        $router = new Route($_SERVER, $_GET, $_POST);
        return $router->post($url, $func, $middlewearOptions);
    }
}