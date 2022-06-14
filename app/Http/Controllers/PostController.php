<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::select('select * from posts');
        $data = ['title' => '投稿リスト', 'posts' => $posts];
        return view('post/index', $data);
    }

    public function create()
    {
        return view('post/create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        if ($request->id) {
            $post = POST::find($request->id);
        }
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function delete($id)
    {
        POST::where('id', $id)->delete();
        return redirect()->route('post.index');
    }


}
