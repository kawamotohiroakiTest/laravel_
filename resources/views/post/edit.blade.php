@extends('layouts.app')
@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
    <h1>編集</h1>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">   
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">名前</label>
                <input name="post_name" class="form-control" value="{{ $post->post_name }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">タイトル</label>
                <input name="post_title" class="form-control" value="{{ $post->post_title }}">
            </div>
        </div>
        <div class="post_form_area">
            <div class="post_flex">
                <label for="exampleInputEmail1" class="form-label post_form_label">詳細</label>
                <textarea name="post_content" class="form-control" value="{{ $post->post_content }}"></textarea>
            </div>
        </div>
        <div class="post_form_area">
            <label>
                <span class="btn btn-primary">
                    画像を選択
                    <input type="file" name="post_image" style="display: none;">
                </span>
            </label>
        </div>
        <div class="image_area post_form_area">
            <img id="post_image" src="{{ asset('storage/'.$post->post_image) }}" alt="">
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
    .image_area > img {
        width: 200px;
    }
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
