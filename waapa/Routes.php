<?php namespace Waapa;

use \Waapa\Core\Route;
use \Waapa\Core\Router;
use \Waapa\Controller\IndexController;
use \Waapa\Controller\PostController;

class Routes
{
    public static function init()
    {


        Router::get('/post/:slug', function($res) {
             return PostController::single($res['slug']);
        });

        Router::get('/blog/page/:id', function($res) {
             return PostController::index($res['id']);
        });

        Router::get('/blog', function($res) {
             return PostController::index(1);
        });

        Router::get('/team/:id', function($res) {
             return 'Team member Id: ' . $res['id'];
        });

        Router::get('/team', function($res) {
             return 'The whole team';
        });

        Router::get('/:slug', function($res) {
             return IndexController::page($res['slug']);
        });

        Router::get('', function($res) {
            return IndexController::index();
        });

    }
}