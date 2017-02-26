<?php namespace App\Shop\View;

use \App\View\BaseView;
use \App\Shop\Model\ViewModel\ProductsPageViewModel;

class ProductsPageView extends BaseView
{
    private $model;

    public function __construct(ProductsPageViewModel $model)
    {
        $this->render($model, 'products');
    }
}