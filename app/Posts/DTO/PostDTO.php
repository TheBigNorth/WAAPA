<?php namespace App\Posts\DTO;

class PostDTO
{
    public $title;
    public $content;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}