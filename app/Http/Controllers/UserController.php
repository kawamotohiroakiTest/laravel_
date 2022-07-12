<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::id();
        $products = DB::table('products')->whereRaw("products_userid = :user", ["user" => $user])->get();
        $data = ['title' => '投稿リスト', 'products' => $products];

        return view('user/index', $data);
    }
    public function create()
    {
        $bigcategories = DB::table('bigcategory')->get();
        return view('user/create', compact('bigcategories'));
    }
    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $bigcategories = DB::table('bigcategory')->get();
        return view('user.edit', compact('product','bigcategories'));
    }
    public function store(Request $request)
    {
        $validate_rule = Product::$validate_rule;
        $this->validate($request, $validate_rule);
        Product::storeProduct($request);
        return redirect()->route('user.index');
    }



}
