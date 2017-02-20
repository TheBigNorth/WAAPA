<?php namespace App\View;

use \App\ViewModel\TeamGridViewModel;

class TeamGridView extends BaseView
{
    public function __construct(TeamGridViewModel $model)
    {
        $this->render($model, 'team-grid');
    }
}