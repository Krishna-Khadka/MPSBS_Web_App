<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function events(){
        $data['header_title'] = 'Events & Categories';
        $postType = [];
        foreach(Event::Post_Status as $statusKey => $status){
            $postType[$statusKey ] = $status;
        }
        $event = Event::with('EventCategory')->get();
        $event_categories = EventCategory::all();

        $content = compact('event_categories','event', 'postType');
        return view('Dashboard.admin.Event.events',$content,$data);
    }

    public function DisplayEvent(){
        $events = Event::with('EventCategory')->get();
        $output = "";
        $id = 0;

        foreach ($events as $event) {
            $id++;
            $eventDate = Carbon::parse($event->event_date);
            $output .= "<tr>";
            $output .= "<td>{$id}</td>";
            $output .= "<td>{$event->eventCategory->title}</td>"; // Assuming you have a relationship for eventCategory
            $output .= "<td>{$event->title}</td>";
            // $output .= "<td>{$event->slug}</td>";
            // $output .= "<td>{$event->description}</td>";
            $output .= "<td><img src=\"storage/{$event->image_url}\"  width='100px' alt=\"Post Image\"></td>";
            $output .= "<td>{$event->status}</td>";
            $output .= "<td>";
            $output .= "<span class='mr-2'><i class='far fa-calendar-alt'></i> {$eventDate->format('F j, Y')}</span><br>";
            $output .= "<span class='mr-2'><i class='far fa-clock'></i> {$event->start_time}</span>";
            $output .= "<span><i class='far fa-clock'></i> {$event->end_time}</span>";
            $output .= "</td>";
            // $output .= "<td>{$event->event_date}</td>";
            // $output .= "<td>{$event->start_time}</td>";
            // $output .= "<td>{$event->end_time}</td>";
            $output .= "<td>";

            // edit icon
            $output .= "<button type='button' class='btn btn-warning btn-sm editIcon' data-toggle='modal' data-target='#updateEventModal' data-event-id='{$event->id}'>";
            $output .= "<i class='fas fa-edit'></i> Edit";
            $output .= "</button>";

            // delete icon
            $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIcon' data-toggle='modal' data-target='#deleteEventModal' data-event-id='{$event->id}'>";
            $output .= "<i class='fas fa-trash'></i> Delete";
            $output .= "</button>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'events' => $output
        ]);


    }

    public function createEvent(Request $req){
        $event = new Event();
        // event_category_id 	title 	slug 	description 	image_url 	post_type 	status 	event_date 	start_time 	end_time
        $event->event_category_id = $req->eventCategory;
        $event->title = $req->title;
        $event->slug = $req->slug;
        $event->slug = $this->generateSlug($req->title);
        $event->description = $req->description;
        if($req->hasFile('image')){
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'uploads';
            $image->storeAs($directory, $imageName, 'public');
            $event->image_url = $directory . '/' . $imageName;
        }
        $event->status = $req->status;
        $event->event_date = $req->eventDate;
        $event->start_time = $req->startTime;
        $event->end_time = $req->endTime;

        $data = $event->save();
        if($data){
            return response()->json([
                'status' => 200
            ]);
        }
    }

    private function generateSlug($title)
    {
        return Str::slug($title);
    }

    public function edit(Request $req){
        $id = $req->id;
        $events = Event::find($id);
        return response()->json($events);
    }

    public function updateEvent(Request $req){
        // dd($req->all());
        // $event = new Event();
        $event = Event::find($req->event_id);
        $event->event_category_id = $req->eventCategory;
        $event->title = $req->title;
        $event->slug = $this->generateSlug($req->title);
        $event->description = $req->description;
        $event->status = $req->status;
        if($req->hasFile('image')){
            $newImage = $req->file('image');
            $imageName = time() . '_' . $newImage->getClientOriginalName();
            $directory = 'uploads';
            $newImage->storeAs($directory, $imageName, 'public');
            if(!empty($event->image_url)){
                $oldImage = public_path('storage/'.$event->image_url);
                if(file_exists($oldImage)){
                    unlink($oldImage);
                }
            }
            $event->image_url = $directory . '/' . $imageName;
        }

        $event->event_date = $req->eventDate;
        $event->start_time = $req->startTime;
        $event->end_time = $req->endTime;

        $res = $event->save();
        if($res){
            return response()->json(['status' => 200]);
        }
    }


    public function DeleteEvent(Request $req){
        $id = $req->id;
        $res = Event::find($id);
        $res->delete();

        if(!empty($res->image_url)){
            $oldImage = public_path('storage/'.$res->image_url);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }
        }

        if($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'];
        }
        return response()->json($data);
    }
}
