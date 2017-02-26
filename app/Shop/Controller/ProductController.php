<?php namespace App\Shop\Controller;

use \App\Shop\Query\GetProductsQuery;
use \App\Shop\Query\GetProductQuery;
use \App\Shop\Query\AddNewProductQuery;
use \App\Shop\View\ProductsPageView;
use \App\Shop\View\ProductPageView;
use \App\Shop\View\ProductsAdminPageView;
use \App\Shop\View\AddProductsAdminPageView;
use \App\Shop\Model\ViewModel\ProductsPageViewModel;
use \App\Shop\Model\ViewModel\ProductPageViewModel;
use \App\Shop\Model\Domain\PageId;
use \App\Shop\Model\Domain\MoneyAsDecimal;
use \App\Shop\DTO\ProductDTO;
use \App\Shop\Model\Domain\Product;

class ProductController
{
    public static function getProductsPage()
    {
        $products = (new GetProductsQuery())->collection();
        $model = new ProductsPageViewModel($products);
        new ProductsPageView($model);
    }

    public static function getProductPage($productId)
    {
        $product = (new GetProductQuery(new PageId($productId)))->item();
        $model = new ProductPageViewModel($product);
        new ProductPageView($model);
    }

    public static function getProductsAdminPage()
    {
        $products = (new GetProductsQuery())->collection();
        new ProductsAdminPageView($products);
    }

    public static function addProductsAdminPage()
    {
        new AddProductsAdminPageView();
    }

    public static function addProductRequest($post)
    {
        $dto = new ProductDTO();
        $dto->name = $post['name'];
        $dto->setPrice(new MoneyAsDecimal($post['price']));
        $model = Product::register($dto->name, $dto->getPrice());
        new AddNewProductQuery($model);
        $url = remove_query_arg('action');
        wp_redirect($url);
    }

    public static function stopSellingRequest($post)
    {
        //echo 'Stop selling - ';
        wp_redirect($_SERVER['self']);
    }
}