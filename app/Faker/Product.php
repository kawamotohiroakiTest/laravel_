<?php

namespace App\Faker;

use Illuminate\Support\Arr;

class Product extends \Faker\Provider\Base
{
    private $_products = [];

    public function product($parameters) {

        if(empty($this->_products)) {

            $this->_products = $this->getProducts($parameters);

        }

        return Arr::random($this->_products);

    }

    private function getProducts($parameters) {

        $parameters['appid'] = env('YAHOO_APPID');
        // $url = 'https://circus.shopping.yahooapis.jp/ShoppingWebService/V1/editItem?'. http_build_query($parameters);
        $url = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=7830060';
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $products = [];
        $total = 1;
        // dd($data['results']);
        // $total = intval($data['ResultSet']['totalResultsReturned']);

        for($i = 0 ; $i < $total ; $i++) {

            // $product = $data['results']['address1'];

            $products[] = [
                'products_name' => $data['results'][0]['address1'],
                'products_code' => $data['results'][0]['address2'],
                'products_price' => $data['results'][0]['address3'],
            ];

            // $product = $data['ResultSet'][0]['Result'][$i];

            // $products[] = [
            //     'name' => $product['Name'],
            //     'code' => $product['Code'],
            //     'price' => $product['Price']['_value'],
            // ];

        }

        return $products;

    }
}