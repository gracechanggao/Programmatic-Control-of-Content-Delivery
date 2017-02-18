<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index()
    {
//        $posts = Post::where('published_at', '<=', Carbon::now())
//            ->orderBy('published_at', 'desc')
//            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', compact('arti'));
    }
    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
}
