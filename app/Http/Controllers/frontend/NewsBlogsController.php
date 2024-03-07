<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsBlogsController extends Controller
{
    public function index(){
        $posts = Post::with('category')->get();
        $data = compact('posts');
        return view('Frontend.Posts.News-Blogs',$data); 
    }
}
