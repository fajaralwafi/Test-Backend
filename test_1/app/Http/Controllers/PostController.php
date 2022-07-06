<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('add-tipe-post-form');
    }
    public function store(Request $request)
    {
        $post = new Post;

        $post->angka = $request->angka;
        $post->tipe = $request->tipe;

        $data = [
            "angka" => $request->angka,
            "tipe" => $request->tipe

        ];

        return view('store-tipe', $data);
    }
}
