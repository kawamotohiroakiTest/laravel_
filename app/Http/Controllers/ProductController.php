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
        dump($bigcategories);
        return view('product/index', compact('bigcategories'));
    }

    public function product($id)
    {   
        $products = DB::select('select * from products where id = '.$id);
        return view('product/product', compact('products'));
    }

    public function category($id)
    {
        $products2 = DB::table('products')->get();
        $products = DB::table('products') //id被りのため修正
            ->select('products.id','products.products_name','products.products_code',
            'products.products_price','products.products_stock','products.products_review','products.products_bigcategory','products.products_image','products.products_size',
            'products.products_description','products.products_color','products.products_material','products.products_deliverymethod',
            'products.products_return','products.products_postage','bigcategory.bigcategory_name')
            ->where('products_bigcategory', $id)
            ->leftJoin('bigcategory', 'products_bigcategory', '=', 'bigcategory.id')
            ->get();
        $count = $products->count();
        dump($count);
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
