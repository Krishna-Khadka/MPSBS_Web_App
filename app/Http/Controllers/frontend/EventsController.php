<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $data['header_title'] = 'Events';
        $events = Event::orderBy('event_date', 'desc')->with('EventCategory')->get();
        $content = compact('events');
        return view('Frontend.Event.events',$content,$data);
    }
}
