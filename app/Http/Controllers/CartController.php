<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Purchaselog;
use Illuminate\Support\Facades\DB;
use App\Models\Mail;
use App\Http\Controllers\MailController;




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
            
        }
        $session = session('product_id');
        if (!isset($cart_products)) {
            // return view('cart/index', compact('session'));
            return view('cart/index');
        } else {
            // return view('cart/index', compact('session'));
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
        $session = session('product_id');
        if (!isset($cart_products)) {
            // return view('cart/index', compact('session'));
            return redirect()->route('product.index');
        } else {
            // return view('cart/index', compact('session'));
            return redirect()->route('product.index');
        }
    }

    public function purchase(Request $request) {
        $product_id_arr = $request->collect("product_id");
        $wherestr = $product_id_arr->implode(" OR id= ");
        $products = DB::select('select * from products where id = '.$wherestr);
        
        $user = Auth::user();

        foreach($products as $product){
            $post = new Purchaselog;

            $post->purchase_userid = $user->id;
            $post->purchase_username = $user->name;
            $post->purchase_mailaddress = $user->email;
            $post->purchase_address = $user->address;
            
            $product_stock = Product::find($product->id);
            $product_stock->id = $product_stock->id;
            $product_stock->products_stock = $product->products_stock-1;
            $product_stock->save();

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
            MailController::MailNotification($user->name, $product->products_name, $user->email);
        };

        //完了メール送信
        $request->session()->forget('product_id');

        return view('cart/complete');
    }
    

}
