<?php namespace App\Controller;

use \App\Query\GetPostQuery;
use \App\ViewModel\PostPageViewModel;
use \App\View\PostPageView;
use \App\DTO\PostDTO;

class PostsController
{
    public function getSingle()
    {
        global $wp_query;
        $dto = new PostDTO();
        $query = new GetPostQuery($dto, $wp_query->post->ID);
        $post = new PostPageViewModel($query);
        new PostPageView($post);
    }
}