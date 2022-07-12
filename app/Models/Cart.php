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
    * カート商品を追加する
    *
    * @param Request  $request
    * @return array
    */    
    public static function addCart(Request $request) {
        $get = $request->session()->get('product_id');
        
        $cart_products = [];
        foreach($get as $key => $value) {
            $product = Product::where('id', '=', $value)->first();
            $cart_products[] = $product;
        }
        $session = session('product_id');
        return $cart_products;
    }


}
