<?php namespace App\Wordpress;

class RewriteRules 
{
    public static function init()
    {
        add_action( 'init', array(__CLASS__, 'rules') );
        add_filter( 'query_vars', array(__CLASS__, 'queryCars') );
    }

    public static function rules()
    {
        add_rewrite_rule( 'product/([^/]+)', 'index.php?product=$matches[1]', 'top' );
        add_rewrite_rule( 'products', 'index.php?products=yes', 'top' );
    }

    public static function queryCars( $vars ) {
        $vars[] = 'product';
        $vars[] = 'products';
        return $vars;
    }
}