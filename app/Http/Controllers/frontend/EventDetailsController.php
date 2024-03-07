<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function index($slug){
        $data['header_title'] = "Event Details";
        $event = Event::with('EventCategory')->where('slug', $slug)->first();
        $content = compact('event');
        return view('Frontend.Event.event-details',$content,$data);
    }
}
