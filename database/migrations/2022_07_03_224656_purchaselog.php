<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Purchaselog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaselogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('purchase_userid');//取引ユーザーID
            $table->string('purchase_username', 255);//取引ユーザー名
            $table->integer('purchase_productid');//取引商品ID
            $table->string('purchase_mailaddress', 255);//送信メールアドレス
            $table->string('purchase_address', 255);//お届け先住所
            $table->string('purchase_name', 255); //取引商品名
            $table->integer('purchase_code'); //取引商品コード
            $table->integer('purchase_num'); //取引商品個数
            $table->integer('purchase_price'); //取引商品価格
            $table->float('purchase_review')->nullable()->default(null); //取引商品評価
            $table->integer('purchase_tag')->nullable()->default(null); //取引商品タグ
            $table->integer('purchase_category')->nullable()->default(null); //取引商品カテゴリ
            $table->string('purchase_size', 255)->nullable()->default(null); //取引商品サイズ
            $table->string('purchase_description', 255)->nullable()->default(null); //取引商品詳細説明
            $table->string('purchase_color', 255)->nullable()->default(null); //取引商品色
            $table->string('purchase_material', 255)->nullable()->default(null); //取引商品素材
            $table->integer('purchase_deliverymethod')->nullable()->default(null); //取引配送方法
            $table->char('purchase_deleteflag', 1)->nullable()->default("N"); //取引削除フラグ
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
        //
        Schema::dropIfExists('purchaselog');
    }
}
