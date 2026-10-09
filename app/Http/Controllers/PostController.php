<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    // --- DEMO: Audit Output AI (Mass Assignment & Validasi) ---
    // KODE AKTIF (Mentah AI):
    // Rentan terhadap mass-assignment (karena pakai $request->all()) 
    // dan URL redirect hardcoded.
    // public function store(Request $request)
    // {
    //     Post::create($request->all());

    //     return redirect('/posts');
    // }

    // KODE REFACTOR (Solusi):
    // Menggunakan Form Request terpisah dan mengambil data yang sudah divalidasi.
    // Memakai named route untuk redirect agar lebih aman jika URL berubah.
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('posts.index');
    }


    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }


}