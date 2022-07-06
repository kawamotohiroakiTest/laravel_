<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('products_userid');//登録ユーザーID
            $table->string('products_name', 255); //商品名
            $table->integer('products_code'); //商品コード
            $table->integer('products_price'); //商品価格
            $table->integer('products_stock'); //在庫
            $table->float('products_review')->nullable()->default(null); //商品評価
            $table->integer('products_tag')->nullable()->default(null);
            $table->integer('products_category')->nullable()->default(null);
            $table->string('products_image')->nullable()->default(null);
            $table->string('products_size', 255)->nullable()->default(null); //商品サイズ
            $table->string('products_description', 255)->nullable()->default(null); //商品詳細説明
            $table->string('products_color', 255)->nullable()->default(null); //商品色
            $table->string('products_material', 255)->nullable()->default(null); //商品素材
            $table->integer('products_deliverymethod')->nullable()->default(null); //商品配送方法
            $table->char('products_return', 1)->nullable()->default("Y"); //商品返品可否
            $table->integer('products_postage')->nullable()->default(null); //商品送料
            $table->char('products_deleteflag', 1)->nullable()->default("N"); //商品削除フラグ
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
