<?php namespace Waapa\Controller;

use \Waapa\Core\Render;
use \Waapa\Repository\Posts;

class IndexController
{
    public static function index()
    {
        return Render::view('index', []);
    }

    public static function page($slug)
    {
        $page = Posts::where('post_status', 'publish')
                    ->where('post_name', $slug)
                    ->first();
        
        if (count($page) === 0) {
            return self::pageDoesNotExist();
        }

        $template = $page->post_type === 'post' ? 'posts.single' : 'page';

        return Render::view($template, ['page' => $page]);
    }

    public static function pageDoesNotExist()
    {
        return Render::view('404', []);
    }
}
