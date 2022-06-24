@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <div class="flex main_search">
            <section class="search">
                <h1>条件で絞り込む</h1>
                <div>
                    <h2>機能・仕様</h2>
                    <p><input type="checkbox" id="term1"><label for="term1">2層式ポケットコイル</label></p>
                    <p><input type="checkbox" id="term2"><label for="term2">3層式ポケットコイル</label></p>
                </div>
                <div>
                    <h2>タイプ</h2>
                    <p><input type="checkbox" id="term3"><label for="term3">硬め</label></p>
                    <p><input type="checkbox" id="term4"><label for="term4">普通</label></p>
                </div>
                <button>条件を絞り込む</button>
            </section>
            <section class="content">
                <div class="flex img_detail">
                    <section>
                        <h1>ポケットコイルマットレス</h1>
                        <p>点で支えるポケットコイルが体にフィットします。<br>側面は３Ｄメッシュで通気性向上。</p>
                        <div class="flex">
                            <p>全<span>32</span>件 <span>1</span>〜<span>32</span></p>
                            <div class="category_count">
                                <select name="">
                                    <option value="">おすすめ順</option>
                                    <option value="">価格が安い順</option>
                                    <option value="">評価が高い順</option>
                                </select>
                            </div>
                        </div>
                        <div class="product_list">
                            <article>
                                <a href="/product">                                
                                    <p class="product_list_img">
                                        <img src="{{ asset('storage/testimage.jpeg') }}">
                                    </p>
                                    <p>ポケットコイルマットレス</p>
                                    <h2><span>8,990</span>円</h2>
                                    <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                    <div>
                                        <div><span>商品コード</span></div>
                                        <div><span>カラー</span></div>
                                        <div><span>サイズ</span></div>
                                        <div><span>素材</span></div>
                                    </div>
                                </a>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                            <article>
                                <p class="product_list_img">
                                    <img src="{{ asset('storage/testimage.jpeg') }}">
                                </p>
                                <p>ポケットコイルマットレス</p>
                                <h2><span>8,990</span>円</h2>
                                <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>(100)</i></p>
                                <div>
                                    <div><span>商品コード</span></div>
                                    <div><span>カラー</span></div>
                                    <div><span>サイズ</span></div>
                                    <div><span>素材</span></div>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
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
    .content {
        width: 70%;
    }
    .category_count {
        margin-left: 50px;
    }
    .main_search {
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
    .search {
        width: 30%;
        background: #f7f7f7;;
        padding: 20px;
    }
    .search span {
        font-weight: bold;
    }
    .num_text_s {
        width: 50px;
    }
    h2 span {
        font-size: 35px;
    }
    .search h2 {
        font-size: 1.0em;
    }
    .search_button {
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
    .section_img img {
        width: 100%;
    }
    .sub_img {
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
    }
    .sub_img div {
        width: 20%;
        gap: 10px;
        padding-top:10px;
    }
    .product_list {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        margin-top: 50px;
    }
    .product_list article {
        width: 20%;
    }
    .product_list article a {
        text-decoration: none;
        color: #000;
    }
    .product_list_img {
        width: 100%;
    }
    .product_list_img img {
        width: 100%;
    }
    @media screen and (max-width: 1080px) {
        .img_detail {
            flex-wrap: wrap;
        }
        .search {
            width: 100%;
        }
    }
    @media screen and (max-width: 710px) {
        .main_search {
            flex-wrap: wrap;
        }
    }

    /* .like_button_checked {
        display: none;
    } */
</style>
