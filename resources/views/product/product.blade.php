@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section> 
        <h1>シングル ポケットコイルマットレス(EP 厚さ20cm)</h1>
        <p>商品コード <span>5650307</span></p>
        <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
        <p><span>5サイズ</span><span>動画</span><span>ネット限定</span></p>
    </section>
    <section>
        <div class="flex main_cart">
            <section>
                <div class="flex img_detail">
                    <section class="section_img">
                        <div><img src="{{ asset('storage/testimage.jpeg') }}"></div>
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
                    <section>
                        <p>サイズ：<span>シングル</span></p>
                        <select name="">
                            <option value="">シングル</option>
                            <option value="">セミダブル</option>
                            <option value="">クイーン</option>
                        </select>
                        <p>点で支えるポケットコイルが体にフィットします。<br>側面は３Ｄメッシュで通気性向上。</p>
                        <h2><span>8,990</span>円</h2>
                        <p>仕様・サイズ</p>
                        <p>
                            <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                            <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                            <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                            <img src="{{ asset('storage/testimage.jpeg') }}" style="width: 100px;">
                        </p>
                        <div>
                            <div><span>商品コード</span><span>5650307</span></div>
                            <div><span>カラー</span><span>ホワイト</span></div>
                            <div><span>サイズ</span><span>幅97✖️奥行195✖️高さ20cm</span></div>
                            <div><span>素材</span><span>ポリエステル</span></div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="cart">
                <p>納品方法：<span>玄関先迄納品（店舗受取可能商品）</span></p>
                <p>配送目安：<span>2〜6日で出荷</span></p>
                <p>返品・交換：<span>14日返品可能</span></p>
                <p>送料：<span>有料</span></p>
                <p>数量：<span><input type="text" value="" class="num_text_s"></span></p>
                <h2><span>8,990</span>円</h2>
                <p><input type="checkbox" id="cart_button" class="hidden_check">
                    <label class="cart_button" for="cart_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16"><path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg>
                        カートに入れる
                    </label>
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

  </div>
</body>
@endsection
<style>
    #wrapper {
        margin: 50px;
        max-width: 2000px;
    }
    .flex {
        display: flex;
    }
    .main_cart {
        gap: 20px;
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
        width: 70%;
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
