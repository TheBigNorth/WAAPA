<?php namespace Waapa\Controller;

use \Waapa\Core\Render;
use \Waapa\Repository\Products;

class ProductController extends BaseController
{
    public static function admin()
    {
        $products = Products::all();

        return Render::view('products.admin.index', ['products' => $products]);
    }

    public static function adminAddNew()
    {
        return Render::view('products.admin.add-new', []);
    }

    public static function adminEdit($id)
    {
        $product = Products::where('id', $id)
                    ->first();

        return Render::view('products.admin.edit', ['product' => $product ]);
    }

    public static function add($data)
    {
        if (!isset($data['product-name'])) {
            return;
        }

        if (!isset($data['product-price'])) {
            return;
        }

        $products = new Products();
        $products->name = $data['product-name'];
        $products->price = $data['product-price'];
        $products->save();

        return self::redirect('/admin/products');
    }
}
