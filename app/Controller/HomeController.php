<?php namespace App\Controller;

use \App\ViewModel\HomeViewModel;
use \App\Query\HomePageQuery;
use \App\View\HomeView;
use \App\Query\TeamQuery;

class HomeController
{
    public static function get()
    {
        $pageQuery = new HomePageQuery();
        $model = new HomeViewModel();
        $model->compose($pageQuery->getContent());        
        new HomeView($model);
    }
}