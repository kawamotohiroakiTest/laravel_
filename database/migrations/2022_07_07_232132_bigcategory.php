<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bigcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bigcategory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bigcategory_name');//カテゴリ名
            $table->string('bigcategory_image');//カテゴリサムネイル
            $table->string('bigcategory_description');//カテゴリの紹介文
            $table->string('bigcategory_status')->default("Y"); //カテゴリ表示ステータス
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
    }
}
