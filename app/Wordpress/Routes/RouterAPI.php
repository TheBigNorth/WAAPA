<?php namespace App\Wordpress\Routes;

use \App\Shop\Controller\ProductController;
use \App\Posts\Controller\PostsAPIController;
use \App\Core\WordpressAPI;

class RouterAPI
{
    public static function init()
    {
        add_action('init', array(__CLASS__, 'routes'));
    }

    public static function routes()
    {
        WordpressAPI::get('v1', '/products', [], function() {
            PostsAPIController::getSingle();
        });
    }
}