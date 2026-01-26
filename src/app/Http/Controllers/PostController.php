<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        // さっき作った published() スコープを使用！
        $posts = Post::published()->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // 非公開の記事をURL直打ちで見ようとした場合は 404エラーを出す
        if (!$post->is_published) {
            abort(404);
        }

        return view('posts.show', compact('post'));
    }

}


