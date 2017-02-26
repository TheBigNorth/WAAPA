<?php namespace App\Shop\View;

use \App\View\BaseView;

class AddProductsAdminPageView extends BaseView
{
    private $model;

    public function __construct()
    {
        $this->render([], 'admin-add-products');
    }
}