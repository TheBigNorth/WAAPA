<?php namespace App\Common\Service;

use \App\Common\Query\GetTeamQuery;
use \App\Common\ViewModel\TeamGridViewModel;
use \App\Common\ViewModel\TeamGridMember;

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