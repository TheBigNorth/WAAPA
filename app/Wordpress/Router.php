<?php namespace App\Wordpress;

use \App\Pages\Controller\HomeController;
use \App\Posts\Controller\PostsController;
use \App\Pages\Controller\PageController;
use \App\Shop\Controller\ProductController;

class Router
{
    public static function init()
    {
        self::web();
        self::api();
    }

    public static function web()
    {

        if (get_query_var('product')) {
            return ProductController::getProductPage(
                (integer) get_query_var('product')
            );
        }

        if (get_query_var('products')) {
            return ProductController::getProductsPage();
        }

        if (is_home() && is_front_page() ) {
            return HomeController::get();
        }
        
        if (is_front_page()) {
            return HomeController::get();
        }

        if (is_home()) {
            return PostsController::getBlog();
        }
        
        if (is_single()) {
            return PostsController::getSingle();
        }

        if (is_singular()) {
            return PageController::get();
        }

        if (is_404()) {
            echo "<br/><br/>NOT FOUND";
        }
    }

    private static function api()
    {
        
    }
}