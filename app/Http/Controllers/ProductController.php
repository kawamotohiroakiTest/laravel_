<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product/index');
    }

    public function product($id)
    {   
        $products = DB::select('select * from products where id = '.$id);
        dump($products);
        return view('product/product', compact('products'));
    }

    public function category()
    {
        $products = DB::select('select * from products');
        return view('product/category', compact('products'));
    }

    public function cart()
    {
        return view('product/cart');
    }


}
