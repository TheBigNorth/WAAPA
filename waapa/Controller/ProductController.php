<?php namespace Waapa\Controller;

use \Waapa\Core\Render;

class ProductController
{
    public static function admin()
    {
        return Render::view('products.admin.index', []);
    }
}
