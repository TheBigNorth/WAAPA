<?php namespace App\Posts\ViewModel;

use \App\Posts\DTO\PostDTO;

class PostPageViewModel
{

    public $title;
    public $content;

    public function __construct(PostDTO $dto)
    {
        $this->title = $dto->title;
        $this->content = $dto->content;
    }
}