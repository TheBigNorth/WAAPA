<?php namespace App\Common\Controller;

use \App\Common\Query\GetTeamQuery;
use \App\ViewModel\TeamGridViewModel;
use \App\View\TeamGridView;
use \App\Common\Service\BuildTeamGrid;

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