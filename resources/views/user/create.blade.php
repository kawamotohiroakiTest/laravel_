@extends('layouts.app')
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品名</label>
                <input name="products_name" class="form-control" value="名前の入力欄"/>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品コード</label>
                <input name="products_code" class="form-control" placeholder="タイトルの入力欄"/>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品価格</label>
                <textarea name="products_price" class="form-control" placeholder="内容の入力"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品在庫</label>
                <textarea name="products_stock" class="form-control" placeholder="内容の入力"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品カテゴリー</label>
                <div class="">
                    <select name="products_category" class="form-select">
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
                <textarea name="products_description" class="form-control" placeholder="内容の入力"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品サイズ</label>
                <select name="products_size" class="form-select">
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
                <select name="products_color" class="form-select">
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
                <textarea name="products_material" class="form-control" placeholder="内容の入力"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の配送方法</label>
                <select name="products_deliverymethod" class="form-select">
                        <option value="">選択</option>
                        <option value="1">自宅受け取り</option>
                        <option value="2">それ以外</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の返品</label>
                <select name="products_return" class="form-select">
                        <option value="">選択</option>
                        <option value="1">可能</option>
                        <option value="2">不可</option>
                </select>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品の送料</label>
                <textarea name="products_postage" class="form-control" placeholder="内容の入力"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">商品評価</label>
                <select name="products_review" class="form-select">
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
                <select name="products_tag" class="form-select">
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