<?php namespace App\Wordpress\Routes;

use \App\Pages\Controller\HomeController;
use \App\Posts\Controller\PostsController;
use \App\Pages\Controller\PageController;
use \App\Shop\Controller\ProductController;
use \App\Core\Route;
use \App\Core\Router;

class Routing
{
    public static function init()
    {
        self::web();
    }

    public static function web()
    {
    
        $router = Route::init($_SERVER, $_GET, $_POST);

        Router::get('/blog', function($res) {
            return 'blog';
        });

        Router::get('/posts/:id', function($res) {
            return PostsController::getSingle($res['id']);
        });

        Router::get('/products', function($res) {
            return ProductController::getProductsPage();
        });

        Router::get('/product/:id', function($res) {
            return ProductController::getProductPage($res['id']);
        });

        Router::get('/user/:id/posts', function($res) {
            return 'user ' . $res['id'] . ' posts';
        });

        Router::get('/user/:id', function($res) {
            return 'user ' . $res['id'];
        });

        Router::get('/:slug', function($res) {
             return PageController::get($res['slug']);
        });

        Router::get('/', function($res) {
            return HomeController::get();
        });

        if (is_home()) {
            return PostsController::getBlog();
        }
        
        if (is_single()) {
            return PostsController::getSingle();
        }

        if (is_404()) {
            echo "<br/><br/>NOT FOUND";
        }
    }
}