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
        //カートの中身を空にしたいとき
        // $request->session()->forget('product_id');
        
        $isAddCart = Cart::isAddCart($request);
        if($isAddCart) {
            $cart_products = Cart::getCart($request);
        }
        if (!isset($cart_products)) {
            return view('cart/index');
        } else {
            return view('cart/index',compact('cart_products'));
        }
    }

    //カートに入れた場合はこちら
    public function indexpost(Request $request)
    {
        Cart::addCart($request);
        return redirect()->route('product.index');
    }

    //購入
    public function purchase(Request $request) {
        Cart::storeCart($request);
        return view('cart/complete');
    }
    

}
