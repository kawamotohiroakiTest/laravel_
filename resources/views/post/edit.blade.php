@extends('layouts.app')
{{ \Carbon\Carbon::now() }}
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
    <h1>編集</h1>
    <form action="{{ route('post.store') }}" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">   
        <div>
            名前：
            <input name="name" value="{{ $post->name }}">
        </div>
        <div>
            タイトル：
            <input name="title" placeholder="{{ $post->title }}">
        </div>
        <div>
            <textarea name="content" placeholder="{{ $post->content }}"></textarea>
        </div>
        <button>送信</button>
    </form>
</div>
@endsection