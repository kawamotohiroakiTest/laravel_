@extends('layouts.app')
@section('content')

<div class="user_product_table">
    <div class="text_center">
        <a href="/user/create" class="btn btn-primary">登録する</a>
    </div>
    <table class="user_product_table" cellspacing="15">
        <tr>
            <th nowrap>商品名</th>
            <th nowrap>商品コード</th>
            <th nowrap>商品価格</th>
            <th nowrap>商品在庫</th>
            <th nowrap>商品評価</th>
            <th nowrap>商品詳細</th>
            <th nowrap>商品サイズ</th>
            <th nowrap>商品の色</th>
            <th nowrap>追加日</th>
            <th nowrap>変更日</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->products_name }}</td>
            <td>{{ $product->products_code }}</td>
            <td>{{ $product->products_price }}</td>
            <td>{{ $product->products_stock }}</td>
            <td>{{ $product->products_review }}</td>
            <td>{{ $product->products_description }}</td>
            <td>{{ $product->products_size }}</td>
            <td>{{ $product->products_color }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td><a href="{{ route('product.product', $product->id) }}" class="btn btn-success">詳細</a></td>
            <td><a href="{{ route('user.edit', $product->id) }}" class="btn btn-success">編集</a></td>
            <td><a href="{{ route('user.delete', $product->id) }}" class="btn btn-danger" onClick="delete_alert(event);return false;">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
<style>
    ul {
        list-style: none;
        padding-left: 0 !important;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    #post_image {
        width: 100%;
        height: 220px;
    }
    .post_card_list {
        width: 45%;
        margin: 0 auto;
    }
    .post_center {
        margin: 0 auto;
    }
</style>
<script>
    function delete_alert(e){
        if(!window.confirm('本当に削除しますか？')){
            window.alert('キャンセルされました'); 
            return false;
        }
        document.deleteform.submit();
    };
</script>