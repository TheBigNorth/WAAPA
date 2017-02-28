<?php namespace App\Common\Query;

use \App\Common\DTO\TeamMemberDTO;

class GetTeamQuery
{
    public function data()
    {
        $members = [];

        $members[] = (new TeamMemberDTO())
                ->setName('George')
                ->setPosition('Musician');

        $members[] = (new TeamMemberDTO())
            ->setName('Michael')
            ->setPosition('Artist');

        return $members;
    }
}