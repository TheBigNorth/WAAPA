<?php namespace App\Common\Service;

use \App\Common\Query\GetTeamQuery;
use \App\ViewModel\TeamGridViewModel;
use \App\ViewModel\TeamGridMember;

class BuildTeamGrid
{
    public function __construct(GetTeamQuery $query, TeamGridViewModel $model)
    {
        $members = $query->data();
        foreach ($members as $member) {
            $model->addMember(
                new TeamGridMember(
                    $member->name,
                    $member->position,
                    $member->image
                )
            );
        }

        $this->model = $model;
    }

    public function model()
    {
        return $this->model;
    }
}