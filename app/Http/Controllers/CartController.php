<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Purchaselog;
use Illuminate\Support\Facades\DB;
use App\Models\Sample;
use App\Http\Controllers\SampleController;




class CartController extends Controller
{
    //カートの中身を出すメソッドを作る

    public function index(Request $request)
    {
        if ($request->session()->has('product_id')) {
            $get = $request->session()->get('product_id');
            $cart_products = [];
            foreach($get as $key => $value) {
                $product = Product::where('id', '=', $value)->first();
                $cart_products[] = $product;
            }
            dump($cart_products);
        }
        if (!isset($cart_products)) {
            return view('cart/index');
        } else {
            return view('cart/index', compact('cart_products'));
        }
    }

    //カートに入れた場合はこちら
    public function indexpost(Request $request)
    {
        if (!$request->session()->has('product_id')) { //カートが空なら配列を作る
            $request->session()->put('product_id', []);
        }
        if ($request->session()->has('product_id')) {
            $get = $request->session()->get('product_id');
            if(!in_array($request->product_id, $get)) {
                $request->session()->push('product_id', $request->input('product_id'));
            }
        }
        $cart_products = [];
        foreach($get as $key => $value) {
            $product = Product::where('id', '=', $value)->first();
            $cart_products[] = $product;
        }
        if (!isset($cart_products)) {
            return view('cart/index');
        } else {
            return view('cart/index', compact('cart_products'));
        }
    }

    public function purchase(Request $request) {
        $product = Product::where('id', '=', $request->product_id)->first();
        $user = Auth::user();

        //在庫を減らす
        // $product_st = new Product;
        // $product_st->products_stock = $product->products_stock-1;
        // $product_st->save();

        $post = new Purchaselog;
        $post->purchase_userid = $user->id;
        $post->purchase_username = $user->name;
        $post->purchase_mailaddress = $user->email;
        $post->purchase_address = $user->address;

        $post->purchase_productid = $product->id;
        $post->purchase_name = $product->products_name;
        $post->purchase_code = $product->products_code;
        $post->purchase_num = 1;
        $post->purchase_price = $product->products_price;
        $post->purchase_review = $product->products_review;
        $post->purchase_tag = $product->products_tag;
        $post->purchase_category = $product->products_category;
        $post->purchase_size = $product->products_size;
        $post->purchase_description = $product->products_description;
        $post->purchase_color = $product->products_color;
        $post->purchase_material = $product->products_material;
        $post->purchase_deliverymethod = $product->products_deliverymethod;
        $post->save();

        //完了メール送信
        SampleController::SampleNotification();
        $request->session()->forget('product_id');

        return view('cart/complete');
    }
    

}
