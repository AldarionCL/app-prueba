<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function mostrarPosts($userId)
    {
        $posts = Post::with('comentarios')->where('user_id', $userId)->get();

        return view('posts', ["posts" => $posts]);
    }
}
