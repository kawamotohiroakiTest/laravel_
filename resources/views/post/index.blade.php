@extends('layouts.app')
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
     <ul>
        @foreach ($posts as $post)
            <li class="card post_card_list">
                <img id="post_image" src="{{ asset('storage/'.$post->post_image) }}" alt="">
                <p class="card-title">{{ $post->post_title }}</p>
                <p class="card-text">{{ $post->post_name }}</p>
                <p class="card-text">{{ $post->post_content }}</p>
                 <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">編集する</a>
                 <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger" onClick="delete_alert(event);return false;">削除する</a>
            </li>
        @endforeach
    </ul>
    <div class="post_center">
        <a href="/post/create" class="btn btn-primary">投稿する</a>
    </div>
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