<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function index($slug){
        // $post = Post::with('category')->find($id);
        $post = Post::with('category')->where('slug',$slug)->first();
        // dd($post);
        $data = compact('post');
        return view('Frontend.Posts.Post_Details',$data);
    }
}
