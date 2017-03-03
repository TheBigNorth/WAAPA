<?php namespace Waapa;

use \Waapa\Core\Route;
use \Waapa\Core\Router;

class Routes
{
    public static function init()
    {


        Router::get('/blog/:slug', function($res) {
             return 'Blog by slug: ' . $res['slug'];
        });

        Router::get('/blog', function($res) {
             return 'Blog';
        });

        Router::get('/team/:id', function($res) {
             return 'Team member Id: ' . $res['id'];
        });

        Router::get('/team', function($res) {
             return 'The whole team';
        });

        Router::get('/:slug', function($res) {
             return 'Another Page';
        });

        Router::get('', function($res) {
            return 'Homepage';
        });

    }
}