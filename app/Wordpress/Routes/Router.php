<?php namespace App\Wordpress\Routes;

use \App\Pages\Controller\HomeController;
use \App\Posts\Controller\PostsController;
use \App\Pages\Controller\PageController;
use \App\Shop\Controller\ProductController;
use \App\Core\Route;

class Router
{
    public static function init()
    {
        self::web();
    }

    public static function web()
    {
    
        $router = Route::init($_SERVER, $_GET, $_POST);

        $router->get('/blog', function($res) {
            return 'blog';
        });

        $router->get('/posts/:id', function($res) {
            return 'posts ' . $res['id'];
        });

        $router->get('/user/:id/posts', function($res) {
            return 'user ' . $res['id'] . ' posts';
        });

         $router->get('/user/:id', function($res) {
            return 'user ' . $res['id'];
        });

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
}