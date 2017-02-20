<?php namespace App\Controller;

use \App\Query\GetTeamQuery;
use \App\ViewModel\TeamGridViewModel;
use \App\ViewModel\TeamGridMember;
use \App\View\TeamGridView;
use \App\Service\BuildTeamGrid;

class TeamGridController
{
    public static function get()
    {
        $query = new GetTeamQuery();
        $model = new TeamGridViewModel();
        $service = new BuildTeamGrid($query, $model);
        new TeamGridView($service->model());
    }
}