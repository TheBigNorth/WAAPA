<?php namespace App\ViewModel;

use \App\ComponentModel\TeamGridComponentModel;
use \App\Query\HomePageQuery;
use \App\Query\TeamQuery;
use \App\DTO\PageDTO;

class HomeViewModel
{
    public $title;
    public $content;
    public $teamGrid;

    public function compose(PageDTO $page)
    {
        $this->title = $page->title;
        $this->content = wpautop($page->content);
    }
    
}