@extends('layouts.app')
@section('content')
<script type="text/javascript" src="../../../js/cart.js"></script>
<body>
  <div id="wrapper">
    @foreach($products as $product)
        <section> 
            <h1>{{ $product->products_name }}</h1>
            <p>商品コード <span>{{ $product->products_code }}</span></p>
            <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>({{ $product->products_review }})</i></p>
            <div class="flex product_tag_area">
                <div><span>{{ $product->products_color }}</span></div>
                <div><span>{{ $product->products_size }}</span></div>
                <div><span>{{ $product->products_material }}</span></div>
            </div>    
        </section>
        <section>
            <div class="flex main_product">
                <section class="product_main_area">
                    <div class="flex img_detail">
                        <section class="section_img">
                            <div>
                                <img src="{{ asset('storage/'.$product->products_image) }}">
                            </div>
                            <div class="flex sub_img">
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                            </div>
                            <div class="flex sub_img">
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                                <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
                            </div>
                        </section>
                        <section class="section_detail">
                            <p>サイズ：<span>シングル</span></p>
                            <div class="product_select">
                                <select name="" class="form-select">
                                    <option value="">シングル</option>
                                    <option value="">セミダブル</option>
                                    <option value="">クイーン</option>
                                </select>
                            </div>
                            <p>点で支えるポケットコイルが体にフィットします。<br>側面は３Ｄメッシュで通気性向上。</p>
                            <h2><span>{{ number_format($product->products_price) }}</span>円</h2>
                            <p>仕様・サイズ</p>
                            <p>
                                <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                                <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                                <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                                <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                            </p>
                            <div>
                                <p class="product_cart_content"><span>商品コード：　</span><span>{{ $product->products_code }}</span></p>
                                <p class="product_cart_content"><span>カラー：　</span><span>{{ $product->products_color }}</span></p>
                                <p class="product_cart_content"><span>サイズ：　</span><span>{{ $product->products_size }}</span></p>
                                <p class="product_cart_content"><span>素材：　</span><span>{{ $product->products_material }}</span></p>
                            </div>
                        </section>
                    </div>
                </section>
                <section class="cart">
                    <p class="product_cart_content">納品方法：<span>{{ $product->products_deliverymethod }}</span></p>
                    <p class="product_cart_content">配送目安：<span>{{ $product->products_code }}</span></p>
                    <p class="product_cart_content">返品・交換：<span>{{ $product->products_return }}</span></p>
                    <p class="product_cart_content">送料：<span>{{ $product->products_postage }}</span></p>
                    <!-- <p class="product_cart_content">数量：<span><input type="text" value="" class="num_text_s"></span></p> -->
                    <h2><span>{{ number_format($product->products_price) }}</span>円</h2>
                    <p>
                        <form action="{{ route('cart.index') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="submit" value="カートに入れる">
                        </form>
                    </p>
                    <p><input type="checkbox" id="like_button" class="hidden_check">
                        <label class="like_button" for="like_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>
                            お気に入り
                        </label>
                        <label class="like_button_checked" for="like_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>
                            お気に入り
                        </label>
                    </p>
                </section>
            </div>
        </section>
    @endforeach
  </div>
</body>
@endsection
