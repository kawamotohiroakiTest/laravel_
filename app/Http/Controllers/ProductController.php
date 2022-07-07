<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $bigcategories = DB::table('bigcategory')->get();
        return view('product/index', compact('bigcategories'));
    }

    public function product($id)
    {   
        $products = DB::select('select * from products where id = '.$id);
        return view('product/product', compact('products'));
    }

    public function category($id)
    {
        $products = DB::table('products')
            ->select('*')
            ->where('bigcategory.id', $id)
            ->leftJoin('bigcategory', 'products_bigcategory', '=', 'bigcategory.id')
            ->get();
        $count = $products->count();
        dump($products);
        return view('product/category', compact('products', 'count'));
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
