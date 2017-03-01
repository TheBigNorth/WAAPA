<?php namespace App\Wordpress\Routes;

use \App\Shop\Controller\ProductController;

class ProductAdmin
{
    public static function init()
    {
        add_action( 'admin_menu', array(__CLASS__, 'menuPage') );
    }

    public static function menuPage()
    {
        add_menu_page( 
            'Products',
            'Products',
            'manage_options',
            'products.php',
            array(__CLASS__, 'settingsPage')
        );
    }

    public static function settingsPage() {
        if (is_admin() && isset($_GET['action']) && $_GET['action'] === 'addNewProduct') {
            return ProductController::addProductsAdminPage();
        }

        if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'products.php') {
            return ProductController::getProductsAdminPage();
        }
	}
}