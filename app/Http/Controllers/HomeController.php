<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    function home()
    {
        $posts = Post::latest()->paginate(12);

        return view('index', compact('posts'));
    }

    function getPost($id)
    {
        $post = Post::where('id', $id)->with('user')->first();
        // dd($post);
        return view('single', compact('post'));
    }
}
