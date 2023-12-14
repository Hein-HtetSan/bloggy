<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $categories = Category::all();
        $posts = Post::all();
        $feature_post = Post::latest()->first();
        $latest_posts = Post::latest('created_at')->take(7)->get();
        return view('frontend.index', compact('categories', 'posts', 'feature_post', 'latest_posts'));
    }
}
