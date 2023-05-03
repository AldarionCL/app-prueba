<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function mostrarPosts()
    {
        $userId = Auth::user()->id;
        $posts = Post::with('comentarios')->where('user_id', $userId)->get();

        return view('posts', ["posts" => $posts]);
    }
}
