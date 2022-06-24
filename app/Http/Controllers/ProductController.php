<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product/index');
    }

    public function product()
    {
        return view('product/product');
    }
    public function category()
    {
        return view('product/category');
    }
    public function cart()
    {
        return view('product/cart');
    }


}
