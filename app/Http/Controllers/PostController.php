<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    
    public function showLastPosts()
{
    $posts = Post::latest()->take(5)->get();
    return view('last', compact('posts'));
}

public function showPost($id)
{
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
}

}
