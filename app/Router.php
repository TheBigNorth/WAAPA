<?php namespace App;

use \App\Controller\HomeController;
use \App\Controller\PostsController;
use \App\Controller\PageController;

class Router
{
    public static function init()
    {
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
    }
}