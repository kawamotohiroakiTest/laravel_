@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <h1 class="text_center cart_h1_title">カート </h1>
        @if(isset($cart_products))
        <div class="flex main_cart">
            <section class="cart_product">
                <div class="">
                    <section>
                        @foreach($cart_products as $product)
                            <div class="flex cart_content">
                                    <div class="cart_content_img"><img src="{{ asset('storage/'.$product->products_image) }}" style="width: 100px;"></div>
                                    <div class="cart_content_title">
                                        <p>{{ $product->products_name }}</p>
                                        <div class="product_select">
                                            <select name="" class="form-select">
                                                <option value="">シングル</option>
                                                <option value="">セミダブル</option>
                                                <option value="">クイーン</option>
                                            </select>
                                        </div>
                                        <p>{{ Str::limit($product->products_description, 50, '...') }}</p>
                                        <h2><span>{{ number_format($product->products_price) }}</span>円</h2>
                                        <p>仕様・サイズ</p>
                                        <div>
                                            <div><span>商品コード</span><span>{{ $product->products_code }}</span></div>
                                            <div><span>カラー</span><span>{{ $product->products_color }}</span></div>
                                            <div><span>サイズ</span><span>{{ $product->products_size }}</span></div>
                                            <div><span>素材</span><span>{{ $product->products_material }}</span></div>
                                        </div>
                                    </div>
                                    <div class="cart_content_count">
                                        <!-- <p>数量：<span><input type="text" value="" class="num_text_s"></span></p> -->
                                        <p>✖️削除</p>
                                    </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </section>
            <section class="cart">
                <div class="cart_total_area">
                    <h2>お支払い金額：　<span>8,990</span>円</h2>
                </div>
                <form action="{{ route('cart.purchase') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-grid gap-2 product_search_button">
                        @foreach($cart_products as $key => $product)
                            <input type="hidden" name="product_id[{{$key}}]" value="{{ $product->id }}">
                        @endforeach
                        <input type="submit" value="購入する" class="btn btn-danger">
                    </div>
                </form>
                <div class="d-grid gap-2 product_search_button">
                    <button class="btn btn-secondary">ショッピングを続ける</button>
                </div>
            </section>
        </div>
        @else
        <div class="flex main_cart">
            <section class="cart_product">
                <div class="">
                    <section>
                        <p>カートに商品がありません</p>
                    </section>
                </div>
            </section>
        </div>
        @endif
    </section>

  </div>
</body>
@endsection
