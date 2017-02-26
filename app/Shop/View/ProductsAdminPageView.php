<?php namespace App\Shop\View;

use \App\View\BaseView;
use \App\Shop\DTO\ProductCollectionDTO;

class ProductsAdminPageView extends BaseView
{
    private $model;

    public function __construct(ProductCollectionDTO $products)
    {
        $this->render($products, 'admin-products');
    }
}