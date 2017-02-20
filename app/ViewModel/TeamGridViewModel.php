<?php namespace App\ViewModel;

class TeamGridViewModel
{
    public $members = [];

    public function addMember(TeamGridMember $member)
    {
        $this->members[] = $member;
    }
}