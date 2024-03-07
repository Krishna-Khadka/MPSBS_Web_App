<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Notice;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['header_title'] = "Home";
        $posts = Post::orderBy('published_at', 'desc')->with('category')->limit(4)->get();
        $notices = Notice::orderBy('published_date', 'desc')->limit(3)->get();
        // $formattedDate = [];
        // foreach($notices as $notice){
        //     $formattedDate = Carbon::parse($notice->published_date)->format('M d');
        // }
        $events = Event::with('EventCategory')->where('event_date','>', now())->orderBy('event_date', 'asc')->get();
        $count = count($events);
        $content = compact('posts','events','count','notices');
        return view('Frontend.Home.index',$content,$data);
    }
}
