<?php namespace App\Common\ViewModel;

class TeamGridMember 
{
    public function __construct($name, $position, $image)
    {
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
    }
}