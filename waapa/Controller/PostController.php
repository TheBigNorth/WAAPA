<?php namespace Waapa\Controller;

use \Waapa\Core\Render;
use \Waapa\Repository\Posts;

class PostController
{
    public static function index()
    {
        $posts = Posts::where('post_type', 'post')
                    ->where('post_status', 'publish')
                    ->get();
                    
        return Render::view('posts.index', ['posts' => $posts]);
    }

    public static function single($id)
    {
        return Render::view('posts.single', []);
    }
}
