<?php namespace App\Wordpress;

use \App\Wordpress\Routes\RewriteRules;
use \App\Wordpress\Routes\ProductAdmin;
use \App\Wordpress\Routes\RouterAdmin;
use \App\Wordpress\Routes\RouterAPI;
use \App\Wordpress\Routes\Routing;

class Functions
{
    public static function init()
    {
        DB::init();
        Routing::init();
        RewriteRules::init();
        ProductAdmin::init();
        RouterAdmin::init();
        RouterAPI::init();
        add_action( 'init', array( 'App\Wordpress\CustomTemplates', 'get_instance' ) );
    }
    
}