<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use Tests\Feature\Auth;
use Illuminate\Database\Seeder;


class ProductsTest extends TestCase
{
    // use RefreshDatabase;
   
    public function test_createProduct() {
        $post = new Product();
        $post->products_userid = 1;
        $post->products_name = "テスト商品";
        $post->products_code = 12345;
        $post->products_price = 35000;
        $post->products_stock = 30;
        $post->products_review = 5.0;
        $post->products_tag = 1;
        $post->products_bigcategory = 1;
        $post->products_size = "M";
        $post->products_description = "お子様も安心して使えるテーブルです";
        $post->products_color = "赤";
        $post->products_material = "木";
        $post->products_deliverymethod = 1;
        $post->products_return = "Y";
        $post->products_postage = 500;
        $post->save();

        $readUser = Product::where('products_name','テスト商品')->first();
        $this->assertNotNull($readUser);

    }
//    public function setUp(): void
//    {
//     parent::setUp();
   
//     $this->seed('ProductsTableSeeder');

//    }
//    public function test_setUp() {
//     parent::setUp();
//     Tests\Feature\Artisan::call('migrate:refresh');
//     Tests\Feature\Artisan::call('db:seed');
// }



    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
