@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <h1>カート</h1>
        <div class="flex main_cart">
            <section class="cart_product">
                <div class="">
                    <section>
                        <div class="flex cart_content">
                                <div class="cart_content_img"><img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;"></div>
                                <div class="cart_content_title">
                                    <p>シングル　ポケットコイルマットレス</p>
                                    <select name="">
                                        <option value="">シングル</option>
                                        <option value="">セミダブル</option>
                                        <option value="">クイーン</option>
                                    </select>
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
                <h1>お支払い金額<span>8,990</span>円</p>
                <p><input type="checkbox" id="cart_button" class="hidden_check">
                    <label class="cart_button" for="cart_button">
                        レジへ進む
                    </label>
                </p>
                <p><input type="checkbox" id="cart_button" class="hidden_check">
                    <label class="cart_button" for="cart_button">
                        ショッピングを続ける
                    </label>
                </p>
            </section>
        </div>
    </section>

  </div>
</body>
@endsection
<style>
    #wrapper {
        margin: 50px;
        max-width: 2000px;
    }
    h1 {
        text-align: center;
    }
    .flex {
        display: flex;
    }
    .main_cart {
        justify-content: center;
        gap: 20px;
    }
    .cart_content {
        gap:30px;
    }
    .img_detail {
        gap: 30px;
    }
    .hidden_check {
        display: none;
    }
    input:checked + label.cart_button {
        background: green;
    }
    .cart {
        width: 30%;
        background: #f7f7f7;;
        padding: 20px;
    }
    .cart span {
        font-weight: bold;
    }
    .num_text_s {
        width: 50px;
    }
    h2 span {
        font-size: 35px;
    }
    .cart h2 {
        font-size: 1.0em;
    }
    .cart_button {
        width: 100%;
        height: 40px;
        background: #eb6157;
        color: #ffffff;
        border: none;
        text-align: center;
        padding-top: 7px;
    }
    input:checked + label.like_button {
        display: none;
    }
    .img_detail section {
        width: 50%;
    }
    .section_img img {
        width: 100%;
    }
    .sub_img {
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .sub_img div {
        width: 20%;
        gap: 10px;
        padding-top:10px;
    }
    .cart_content > div {
        gap: 30px;
    }
    @media screen and (max-width: 1080px) {
        .img_detail {
            flex-wrap: wrap;
        }
        .img_detail section {
            width: 100%;
        }
        .cart {
            width: 100%;
        }
    }
    @media screen and (max-width: 710px) {
        .main_cart {
            flex-wrap: wrap;
        }
    }

    /* .like_button_checked {
        display: none;
    } */
</style>
