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
        dump($user);
        $products = DB::table('products')->whereRaw("products_userid = :user", ["user" => $user])->get();
        $data = ['title' => '投稿リスト', 'products' => $products];

        return view('user/index', $data);
    }
    public function create()
    {
        return view('user/create');
    }
    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        // dd($product);
        return view('user.edit', compact('product'));
    }
    public function store(Request $request)
    {
        $post = new Product;
        if ($request->id) {
            $post = Product::find($request->id);
        }
        $post->products_name = $request->products_name;
        $post->products_code = $request->products_code;
        $post->products_price = $request->products_price;
        $post->products_stock = $request->products_stock;
        $post->products_review = $request->products_review;
        $post->products_tag = $request->products_tag;
        $post->products_category = $request->products_category;
        $post->products_size = $request->products_size;
        $post->products_description = $request->products_description;
        $post->products_color = $request->products_color;
        $post->products_material = $request->products_material;
        $post->products_deliverymethod = $request->products_deliverymethod;
        $post->products_return = $request->products_return;
        $post->products_postage = $request->products_postage;
        $post->products_image = $request->file('products_image')->getClientOriginalName();
        $document = $request->products_image;
        $document->storeAs('',$post->products_image,'public');
        $post->save();

        return redirect()->route('user.index');
    }



}
