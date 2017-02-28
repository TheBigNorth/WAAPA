<?php namespace App\Common\DTO;

class TeamMemberDTO
{
    public $name;
    public $position;
    public $image;

    public function __construct()
    {
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}