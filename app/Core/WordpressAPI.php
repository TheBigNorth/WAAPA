<?php namespace App\Core;

class WordpressAPI implements API
{

    public static $apiNamespace = 'waapa';

    public static function get($urlVerson, $route, array $uriSegments, callable $func) {

        $requestObject = new RouteString($route, $uriSegments);
        $baseURL =  self::$apiNamespace . '/' . $urlVerson;

        add_action( 'rest_api_init', function () use ($func, $baseURL) {
            register_rest_route( $baseURL, '/products', array(
                'methods' => 'GET',
                'callback' => function($data) use ($func) {
                    call_user_func_array($func, [$uriSegments]);
                },
            ));
        });
    }
}