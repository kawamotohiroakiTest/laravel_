@extends('layouts.app')
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
    <h1>編集</h1>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="id" value="{{ $product->id }}">   
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品名</label>
                <input name="products_name" class="form-control" value="{{ $product->products_name }}"/>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品コード</label>
                <input name="products_code" class="form-control"  value="{{ $product->products_code }}"/>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品価格</label>
                <input name="products_price" class="form-control" value="{{ $product->products_price }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品在庫</label>
                <input name="products_stock" class="form-control" value="{{ $product->products_stock }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品カテゴリー</label>
                <div class="">
                    <select name="products_category" id="products_category" class="form-select" data-name="{{ $product->products_category }}">
                        <option value="">選択</option>
                        <option value="1">ベッド</option>
                        <option value="2">机</option>
                        <option value="3">椅子</option>
                        <option value="4">テーブル</option>
                        <option value="5">マット</option>
                        <option value="6">小物</option>
                        <option value="7">布団</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品詳細</label>
                <input name="products_description" class="form-control" placeholder="内容の入力" value="{{ $product->products_description }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品サイズ</label>
                <select name="products_size" id="products_size" class="form-select" data-name="{{ $product->products_size }}">
                    <option value="">選択</option>
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                    <option value="4">LL</option>
                    <option value="5">LL以上</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の色</label>
                <select name="products_color" id="products_color" class="form-select" data-name="{{ $product->products_color }}">
                        <option value="">選択</option>
                        <option value="1">白</option>
                        <option value="2">黒</option>
                        <option value="3">赤</option>
                        <option value="4">青</option>
                        <option value="5">緑</option>
                        <option value="6">黄</option>
                        <option value="7">ピンク</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の素材</label>
                <input name="products_material" class="form-control"  value="{{ $product->products_material }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の配送方法</label>
                <select name="products_deliverymethod" id="products_deliverymethod" class="form-select" data-name="{{ $product->products_deliverymethod }}">
                        <option value="">選択</option>
                        <option value="1">自宅受け取り</option>
                        <option value="2">それ以外</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の返品</label>
                <select name="products_return" id="products_return" class="form-select" data-name="{{ $product->products_return }}">
                        <option value="">選択</option>
                        <option value="1">可能</option>
                        <option value="2">不可</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の送料</label>
                <input name="products_postage" class="form-control"  value="{{ $product->products_postage }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品評価</label>
                <select name="products_review" id="products_review" class="form-select" data-name="{{ $product->products_review }}">
                        <option value="">選択</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品タグ</label>
                <select name="products_tag" id="products_tag" class="form-select" data-name="{{ $product->products_tag}}">
                        <option value="">選択</option>
                        <option value="1">寝具</option>
                        <option value="2">寝心地良い</option>
                        <option value="3">冷たい</option>
                        <option value="4">お得</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <label>
                <span class="btn btn-primary">
                    画像を選択
                    <input type="file" name="products_image" style="display: none;">
                </span>
            </label>
        </div>
        <div class="image_area post_form_area">
            <img id="products_image" src="{{ asset('storage/'.$product->products_image) }}" alt="">
        </div>
        <div class="post_form_area">
            <button class="btn btn-primary">送信</button>
        </div>
        <div class="post_form_area">
            <a href="/post" class="btn btn-info">一覧に戻る</a>
        </div>
    </form>
</div>
@endsection
<style>
    .post_flex {
        display: flex;
        flex-wrap: nowrap;
    }
    .post_form_label {
        width: 100px;
        margin-top: 10px;
    }
    .post_form_area {
        margin-top: 20px;
    }
</style>
<script>
    const products_category = "{{ $product->products_category }}";

    window.onload = function(){
        const id_category = document.getElementById("products_category");
        id_category.options[id_category.dataset.name].selected = true;

        const id_size = document.getElementById("products_size");
        id_size.options[id_size.dataset.name].selected = true;

        const id_color = document.getElementById("products_color");
        id_color.options[id_color.dataset.name].selected = true;

        const id_deliverymethod = document.getElementById("products_deliverymethod");
        id_deliverymethod.options[id_deliverymethod.dataset.name].selected = true;
        
        const id_products_return = document.getElementById("products_return");
        id_products_return.options[id_products_return.dataset.name].selected = true;
        
        const id_products_review = document.getElementById("products_review");
        id_products_review.options[id_products_review.dataset.name].selected = true;
        
        const id_products_tag = document.getElementById("products_tag");
        id_products_tag.options[id_products_tag.dataset.name].selected = true;
    };
</script>