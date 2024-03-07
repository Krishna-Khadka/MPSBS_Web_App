<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventCategoryController extends Controller
{
    public function saveEventCategories(Request $req){
        $eventCategory = new EventCategory();
        $eventCategory->title = $req->title;
        $eventCategory->slug = $this->generateSlug($req->title);
        $eventCategory->description = $req->description;
        $data = $eventCategory->save();
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

    public function DisplayCategory(){
        $categories = EventCategory::all();
        $output = "";

        foreach($categories as $category){
            $output .= "<tr>";
            $output .= "<td>{$category->title}</td>";
            $output .= "<td>{$category->description}</td>";
            $output .= "<td>";

               // edit icon
               $output .= "<button type='button' class='btn btn-warning btn-sm editIconEC' data-toggle='modal' data-target='#editEventCategoryModal' data-event-id='{$category->id}'>";
               $output .= "<i class='fas fa-edit'></i> Edit";
               $output .= "</button>";
   
               // delete icon
               $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIconEC' data-toggle='modal' data-target='#deleteEventCategoryModal' data-event-id='{$category->id}'>";
               $output .= "<i class='fas fa-trash'></i> Delete";
               $output .= "</button>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'categories' => $output
        ]);
    }


    public function deleteEventCategory(Request $req){
        $id = $req->id;
        $res = EventCategory::find($id);
        $res->delete();

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


    public function editEventCategory(Request $req){
        $id = $req->id;
        $categories = EventCategory::find($id);
        return response()->json($categories);
    }

    public function UpdateEventCategory(Request $req){
        $category = EventCategory::find($req->event_category_id);
        $category->title = $req->title;
        $category->slug = $this->generateSlug($req->title);
        $category->description = $req->description;
        $res = $category->save();

        if($res){
          return response()->json(['status' => 200]);
        }
        
    }
}
