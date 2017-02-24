<?php namespace App\Shop\Controller;

use \App\Shop\Query\GetProductsQuery;
use \App\Shop\View\ProductsPageView;

class ProductController
{
    public static function getProductsPage()
    {
        $products = (new GetProductsQuery())->collection();
        new ProductsPageView($products);
    }

    public static function getProductPage()
    {
        echo 'single product';
    }   
}