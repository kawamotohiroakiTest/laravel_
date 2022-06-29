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
        $post->post_name = $request->post_name;
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->post_image = $request->file('post_image')->getClientOriginalName();
        
        $document = $request->post_image;
        $document->storeAs('',$post->post_image,'public');
        $post->save();
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::where('id', '=', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function delete($id)
    {
        POST::where('id', $id)->delete();
        return redirect()->route('post.index');
    }


}
