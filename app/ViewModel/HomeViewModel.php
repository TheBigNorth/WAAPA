<?php namespace App\ViewModel;

use \App\ComponentModel\TeamGridComponentModel;
use \App\Pages\Query\HomePageQuery;
use \App\Query\TeamQuery;
use \App\Pages\DTO\PageDTO;

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