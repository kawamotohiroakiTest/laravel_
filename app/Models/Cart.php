<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Mail;
use App\Http\Controllers\MailController;


class Cart extends Authenticatable
{
    
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    
    /**
    * カートに同じ商品が入っていないかチェックする
    *
    * @param Request  $request
    * @return bool
    */    
    public static function isAddCart(Request $request) {
        $isAddCart = false;
        if ($request->session()->has('product_id')) { 
            $isAddCart = true;
        }
        return $isAddCart;
    }


    /**
    * カート商品を出力する
    *
    * @param Request  $request
    * @return array
    */    
    public static function getCart(Request $request) {
        $get = $request->session()->get('product_id');
        
        $cart_products = [];
        foreach($get as $key => $value) {
            $product = Product::where('id', '=', $value)->first();
            $cart_products[] = $product;
        }
        $session = session('product_id');
        return $cart_products;
    }

    /**
    * カート商品を追加する
    *
    * @param Request  $request
    * @return array
    */
    public static function addCart(Request $request) {
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
        return $cart_products;
    }

    /**
    * カートの中の商品を購入する
    *
    * @param Request  $request
    * @return 
    */
    public static function storeCart(Request $request) {
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
            $post->purchase_bigcategory = $product->products_bigcategory;
            $post->purchase_size = $product->products_size;
            $post->purchase_description = $product->products_description;
            $post->purchase_color = $product->products_color;
            $post->purchase_material = $product->products_material;
            $post->purchase_deliverymethod = $product->products_deliverymethod;
            $post->save();
            //完了メール送信
            MailController::MailNotification($user->name, $product->products_name, $user->email);
        };
        $request->session()->forget('product_id');
    }




}
