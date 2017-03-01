<?php namespace App\Wordpress;

use \App\Wordpress\Routes\RewriteRules;
use \App\Wordpress\Routes\ProductAdmin;
use \App\Wordpress\Routes\RouterAdmin;
use \App\Wordpress\Routes\RouterAPI;

class Functions
{
    public static function init()
    {
        DB::init();
        RewriteRules::init();
        ProductAdmin::init();
        RouterAdmin::init();
        RouterAPI::init();
        add_action( 'init', array( 'App\Wordpress\CustomTemplates', 'get_instance' ) );
    }
    
}