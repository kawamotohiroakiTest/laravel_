@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <h1 class="text_center cart_h1_title">カート</h1>
        <div class="flex main_cart">
            <section class="cart_product">
                <div class="">
                    <section>
                        <div class="flex cart_content">
                                <div class="cart_content_img"><img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;"></div>
                                <div class="cart_content_title">
                                    <p>シングル　ポケットコイルマットレス</p>
                                    <div class="product_select">
                                        <select name="" class="form-select">
                                            <option value="">シングル</option>
                                            <option value="">セミダブル</option>
                                            <option value="">クイーン</option>
                                        </select>
                                    </div>
                                    <p>点で支えるポケットコイルが体にフィットします。<br>側面は３Ｄメッシュで通気性向上。</p>
                                    <h2><span>8,990</span>円</h2>
                                    <p>仕様・サイズ</p>
                                    <div>
                                        <div><span>商品コード</span><span>5650307</span></div>
                                        <div><span>カラー</span><span>ホワイト</span></div>
                                        <div><span>サイズ</span><span>幅97✖️奥行195✖️高さ20cm</span></div>
                                        <div><span>素材</span><span>ポリエステル</span></div>
                                    </div>
                                </div>
                                <div class="cart_content_count">
                                    <p>数量：<span><input type="text" value="" class="num_text_s"></span></p>
                                    <p>✖️削除</p>
                                </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="cart">
                <div class="cart_total_area">
                    <h2>お支払い金額：　<span>8,990</span>円</h2>
                </div>
                <div class="d-grid gap-2 product_search_button">
                    <button class="btn btn-danger">レジへ進む</button>
                </div>
                <div class="d-grid gap-2 product_search_button">
                    <button class="btn btn-secondary">ショッピングを続ける</button>
                </div>
            </section>
        </div>
    </section>

  </div>
</body>
@endsection
