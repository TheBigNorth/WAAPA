<?php namespace App\Posts\Controller;

use \App\Posts\Query\GetPostQuery;
use \App\Posts\ViewModel\PostPageViewModel;
use \App\Posts\View\PostPageView;

class PostsController
{
    public function getSingle($id)
    {
        global $wp_query;
        $post = (new GetPostQuery())->data($id);
        $model = new PostPageViewModel($post);
        new PostPageView($model);
    }
}