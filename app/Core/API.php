<?php namespace App\Core;

interface API
{
    public static function get($urlVerson, $route, array $uriSegments, callable $function);
   // public static function post($route, array $params, callable $function);
    //public static function put($route, array $params, callable $function);
    //public static function delete($route, array $params, callable $function);
}