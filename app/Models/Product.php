<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
