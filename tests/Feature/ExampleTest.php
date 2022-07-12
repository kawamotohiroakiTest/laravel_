<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\User;
use App\Item;
use App\Models\Product;

class ExampleTest extends TestCase
{
    //データベースの中身をリセットする
    // use RefreshDatabase;
   
   public function setUp(): void
   {
        parent::setUp();
        Product::factory()->count(10)->create(); 
        

        //DBに接続しているか調べる
        // dd(env('APP_ENV'), env('DB_DATABASE'), env('DB_CONNECTION'));
    }


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
