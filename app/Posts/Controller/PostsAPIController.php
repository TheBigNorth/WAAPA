<?php namespace App\Posts\Controller;

use \App\Posts\Query\GetPostQuery;
use \App\Posts\ViewModel\PostPageViewModel;
use \App\Posts\View\PostPageView;

class PostsAPIController
{
    public function getSingle()
    {
        global $wp_query;
        $post = (new GetPostQuery())->data($wp_query->post->ID);
        $model = new PostPageViewModel($post);
        echo json_encode($model);
        exit;
    }
}