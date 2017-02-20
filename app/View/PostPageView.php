<?php namespace App\View;

use \App\ViewModel\PostPageViewModel;

class PostPageView extends BaseView
{
    public function __construct(PostPageViewModel $model) 
    {
        $this->render($model, 'post-page');
    }
}