<?php namespace Waapa;

use \Waapa\Core\Route;
use \Waapa\Core\Router;
use \Waapa\Controller\IndexController;
use \Waapa\Controller\PostController;
use \Waapa\Controller\ProductController;

class Routes
{
    public static function init()
    {

        Router::get('/blog/page/:id', function($res) {
             return PostController::index($res['id']);
        });

        Router::get('/blog', function($res) {
             return PostController::index(1);
        });

        Router::get('/admin/products/edit/:id', function($res) {
            return ProductController::adminEdit($res['id']);
        }, ['WordpressAuth']);

        Router::get('/admin/products/add', function($res) {
            return ProductController::adminAddNew();
        }, ['WordpressAuth']);

        Router::get('/admin/products', function($res) {
            return ProductController::admin();
        }, ['WordpressAuth']);

        Router::post('/product', function($res, $data) {
            return ProductController::add($data);
        }, ['WordpressAuth']);

        Router::get('/:slug', function($res) {
             return IndexController::page($res['slug']);
        });

        Router::get('', function($res) {
            return IndexController::index();
        });

    }
}