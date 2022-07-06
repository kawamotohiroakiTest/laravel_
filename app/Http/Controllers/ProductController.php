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
        return view('product/product', compact('products'));
    }

    public function category()
    {
        $products = DB::select('select * from products');
        return view('product/category', compact('products'));
    }

    public function search(Request $request)
    {
        $key = $request->input('key');
        $query = Product::query();
        $query->where('products_name', 'LIKE', "%{$key}%");
        $products = $query->get();
        $count = $products->count();
        // dump($products);
        return view('product/search', compact('key','count','products'));
    }


    public function cart()
    {
        return view('product/cart');
    }


}
