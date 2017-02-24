<?php namespace App\View;

use \App\ViewModel\HomeViewModel;

class HomeView extends BaseView
{
    private $model;

    public function __construct(HomeViewModel $model)
    {
        $this->render($model, 'home');
    }
}