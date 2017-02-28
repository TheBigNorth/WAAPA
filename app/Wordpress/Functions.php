<?php namespace App\Wordpress;

class Functions
{
    public static function init()
    {
        DB::init();
        RewriteRules::init();
        ProductAdmin::init();
        RouterAdmin::init();
        add_action( 'init', array( 'App\Wordpress\CustomTemplates', 'get_instance' ) );
    }
    
}