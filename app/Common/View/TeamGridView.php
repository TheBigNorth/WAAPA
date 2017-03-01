<?php namespace App\Common\View;

use \App\Common\ViewModel\TeamGridViewModel;
use \App\View\BaseView;

class TeamGridView extends BaseView
{
    public function __construct(TeamGridViewModel $model)
    {
        $this->render($model, 'team-grid');
    }
}