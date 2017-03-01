<?php namespace App\Wordpress\Routes;

use \App\Shop\Controller\ProductController;

class RouterAdmin
{
    public static function init()
    {
        add_action('init', array(__CLASS__, 'routes'));
        
    }

    public static function routes()
    {
        if (is_admin() && isset($_POST['action']) && $_POST['action'] === 'addNewProduct') {
            return ProductController::addProductRequest($_POST);
        }

        if (is_admin() && isset($_POST['action']) && $_POST['action'] === 'stopSelling') {
            return ProductController::stopSellingRequest($_POST);
        }
    }
}