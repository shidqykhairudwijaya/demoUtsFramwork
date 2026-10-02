<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('/posts');
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
}

// public function store(StorePostRequest $request)
// {
//     Post::create($request->validated());

//     return redirect()->route('posts.index');
// }