<?php namespace App\Posts\View;

use \App\Posts\ViewModel\PostPageViewModel;
use \App\View\BaseView;

class PostPageView extends BaseView
{
    public function __construct(PostPageViewModel $model) 
    {
        $this->render($model, 'post-page');
    }
}