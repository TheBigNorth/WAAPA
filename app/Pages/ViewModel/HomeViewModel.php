<?php namespace App\Pages\ViewModel;

use \App\Pages\DTO\PageDTO;

class HomeViewModel
{
    public $title;
    public $content;

    public function compose(PageDTO $page)
    {
        $this->title = $page->title;
        $this->content = wpautop($page->content);
    }
    
}