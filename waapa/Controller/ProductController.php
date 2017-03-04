<?php namespace Waapa\Controller;

use \Waapa\Core\Render;
use \Waapa\Repository\Products;

class ProductController extends BaseController
{
    public static function index()
    {
        $products = Products::where('status', '1')
                        ->get();

        return Render::view('products.index', ['products' => $products]);
    }

    public static function single($id)
    {
        $product = Products::where('id', $id)
                    ->first();

        return Render::view('products.single', ['product' => $product ]);
    }
    
    public static function admin()
    {
        $products = Products::where('status', '1')
                        ->get();

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
        if (!isset($data['product-name'])
            || !isset($data['product-price'])) {
            return;
        }

        $product = new Products();
        $product->name = $data['product-name'];
        $product->price = $data['product-price'];
        $product->status = 1;
        $product->save();

        return self::redirect('/admin/products');
    }

    public static function edit($id, $data)
    {
  
        if (!isset($data['product-name'])
            || !isset($data['product-price'])) {
            return;
        }

        $product = Products::where('id', $id)
                    ->first();

        $product->name = $data['product-name'];
        $product->price = $data['product-price'];
        $product->save();

        return self::redirect('/admin/products/edit/' . $id);
    }

    public static function removeFromDisplay($id)
    {
        $product = Products::where('id', $id)
                    ->first();

        $product->status = 2;
        $product->save();

        return self::redirect('/admin/products');
    }
}
