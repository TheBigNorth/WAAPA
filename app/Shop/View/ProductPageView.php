<?php namespace App\Shop\View;

use \App\View\BaseView;
use \App\Shop\Model\ViewModel\ProductPageViewModel;

class ProductPageView extends BaseView
{
    private $model;

    public function __construct(ProductPageViewModel $model)
    {
        $this->render($model, 'product');
    }
}