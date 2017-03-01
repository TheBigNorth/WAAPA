<?php namespace App\Pages\View;

use \App\Pages\ViewModel\HomeViewModel;
use \App\View\BaseView;

class HomeView extends BaseView
{
    private $model;

    public function __construct(HomeViewModel $model)
    {
        $this->render($model, 'home');
    }
}