<?php namespace App\Pages\Controller;

use \App\ViewModel\HomeViewModel;
use \App\Pages\Query\HomePageQuery;
use \App\View\HomeView;
use \App\Common\Query\TeamQuery;

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