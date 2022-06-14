@extends('layouts.app')
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
     <ul>
        @foreach ($posts as $post)
            <li>投稿者：{{ $post->name }}
                　タイトル：{{ $post->title }}
                　詳細：{{ $post->content }}
                 <a href="{{ route('post.edit', $post->id) }}">編集する</a>
                 <a href="{{ route('post.delete', $post->id) }}" onClick="delete_alert(event);return false;">削除する</a>
            </li>
        @endforeach
    </ul>
     <a href="/post/create">投稿する</a>
</div>
@endsection
<style>
    ul {
        list-style: none;
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