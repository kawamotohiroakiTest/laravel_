<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'products_name',
        'products_code',
        'products_price',
        'products_review',
        'products_tag',
        'products_category',
        'products_image',
        'products_size',
        'products_description',
        'products_color',
        'products_material',
        'products_deliverymethod',
        'products_return',
        'products_postage',
        'products_deleteflag',
    ];

    public static $validate_rule = [
        'products_name' => 'required|max:50',
        'products_code' => 'required|max:10',
        'products_price' => 'required|max:10',
        'products_stock' => 'required|max:4',
        'products_review' => 'max:2',
        'products_size' => 'max:4',
        'products_description' => 'max:200',
        'products_color' => 'max:4',
    ];

    /**
    * 製品情報の登録と編集
    *
    * @param Request  $request
    * @return Response
    */    
    public static function storeProduct(Request $request) {
        $post = new Product;
        if ($request->id) {
            $post = Product::find($request->id);
        }
        $user_id = Auth::id();
        $post->products_userid = $user_id;
        $post->products_name = $request->products_name;
        $post->products_code = $request->products_code;
        $post->products_price = $request->products_price;
        $post->products_stock = $request->products_stock;
        $post->products_review = $request->products_review;
        $post->products_tag = $request->products_tag;
        $post->products_bigcategory = $request->products_bigcategory;
        $post->products_size = $request->products_size;
        $post->products_description = $request->products_description;
        $post->products_color = $request->products_color;
        $post->products_material = $request->products_material;
        $post->products_deliverymethod = $request->products_deliverymethod;
        $post->products_return = $request->products_return;
        $post->products_postage = $request->products_postage;
        // if($request->filled('products_image')) {
            $post->products_image = $request->file('products_image')->getClientOriginalName();
            dump($post->products_image);
            $document = $request->products_image;
            $document->storeAs('',$post->products_image,'public');    
        // }
        $post->save();
    }

    /**
    * カテゴリページに表示させる製品情報を取得
    *
    * @param int $id products_bigcategoryidのID
    * @return array 製品情報と製品のカテゴリ名
    */    
    public static function getProductCategory($id) {
        $products = DB::table('products') //id被りのため修正
        ->select('products.id','products.products_name','products.products_code',
        'products.products_price','products.products_stock','products.products_review','products.products_bigcategory','products.products_image','products.products_size',
        'products.products_description','products.products_color','products.products_material','products.products_deliverymethod',
        'products.products_return','products.products_postage','bigcategory.bigcategory_name')
        ->where('products_bigcategory', $id)
        ->leftJoin('bigcategory', 'products_bigcategory', '=', 'bigcategory.id')
        ->get();    
        return $products;
    }

    /**
    * カテゴリページに表示させる製品情報の数を取得
    *
    * @param object $products 製品情報
    * @return int 製品情報の数
    */    
    public static function getProductCount($products) {
        $count = $products->count();
        return $count;
    }

    /**
    * ヘッダーの検索フォームに入力されたkeyを取得
    *
    * @param object $request ヘッダーの検索フォームに入力されたkey
    * @return string $key
    */    
    public static function getProductSearchKey(Request $request) {
        $key = $request->input('key');
        return $key;
    }

    /**
    * 検索フォームのkeyを元に検索する
    *
    * @param string $key 取得したkey
    * @return object 製品情報
    */    
    public static function getProductSearch($key) {
        $query = Product::query();
        $query->where('products_name', 'LIKE', "%{$key}%");
        $products = $query->get();
        return $products;
    }
}
