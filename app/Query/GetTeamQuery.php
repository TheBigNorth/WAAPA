<?php namespace App\Query;

use \App\DTO\TeamMemberDTO;

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