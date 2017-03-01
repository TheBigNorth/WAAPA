<?php namespace App\Common\ViewModel;

class TeamGridViewModel
{
    public $members = [];

    public function addMember(TeamGridMember $member)
    {
        $this->members[] = $member;
    }
}