<?php namespace App\ViewModel;

use \App\Query\GetPostQuery;

class PostPageViewModel
{

    public $title;
    public $content;

    public function __construct(GetPostQuery $query)
    {
        $data = $query->data();
        $this->title = $data->title;
        $this->content = $data->content;
    }
}