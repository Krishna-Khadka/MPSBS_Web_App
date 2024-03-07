<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    function index() {
        $data['header_title'] = 'Gallery';
        $category = GalleryCategory::all();


        return view('Dashboard.admin.Gallery.gallery-category',compact('category'),$data);
    }

    function GalleryCategory(Request $req){
        $category = new GalleryCategory();
        $category->category = $req->category;

        $data = $category->save();
        if($data){
            return response()->json([
                'status' => 200
            ]);
        }
    }


    public function DisplayCategory(){
        $categories = GalleryCategory::all();
        $output = "";

        foreach($categories as $category){
            $output .= "<tr>";
            $output .= "<td>{$category->category}</td>";
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
            'category' => $output
        ]);
    }
}
