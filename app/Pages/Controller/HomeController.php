<?php namespace App\Pages\Controller;

use \App\Pages\ViewModel\HomeViewModel;
use \App\Pages\Query\HomePageQuery;
use \App\Pages\View\HomeView;
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