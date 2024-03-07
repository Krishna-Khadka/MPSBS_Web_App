<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function Store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->category_id = $request->category;
        $gallery->date = $request->date;
        $gallery->save();

        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $key . '-' . time() . '.' . $extension;

                $path = "uploads/Gallery/";
                $file->move($path, $filename);

                $galleryImage = new GalleryImage();
                $galleryImage->gallery_id = $gallery->id;
                $galleryImage->image = $path . $filename;
                // $galleryImage->image = $path . $filename;
                $galleryImage->save();
            }
        }

        return response()->json([
            'status' => 200,
        ]);
    }


    public function DisplayGallery()
    {
        $galleries = Gallery::with('category')->get();
        $output = "";
        $i = 0;

        foreach ($galleries as $gallery) {
            $i ++;
            $output .= "<tr>";
            $output .= "<td>{$i}</td>";
            $output .= "<td>{$gallery->title}</td>";
            $output .= "<td>{$gallery->category->category}</td>";
            $output .= "<td>{$gallery->date}</td>";
            $output .= "<td>";

            // edit icon
            $output .= "<button type='button' class='btn btn-warning btn-sm editIconEC' data-toggle='modal' data-target='#editEventCategoryModal' data-event-id='{$gallery->id}'>";
            $output .= "<i class='fas fa-edit'></i> Edit";
            $output .= "</button>";

            // delete icon
            $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIconG' data-toggle='modal' data-target='#deleteEventCategoryModal' data-event-id='{$gallery->id}'>";
            $output .= "<i class='fas fa-trash'></i> Delete";
            $output .= "</button>";

            // view gallery
            $output .= "<button type='button' class='btn btn-info btn-sm editIconEC ml-2' data-toggle='modal' data-target='#editEventCategoryModal' data-event-id='{$gallery->id}'>";
            $output .= "<i class='fas fa-eye'></i> View Gallery";
            $output .= "</button>";

            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'galleries' => $output
        ]);
    }

    public function DeleteGallery(Request $request){
        $id = $request->id;
        $res = Gallery::with('images')->find($id);
        // $res->delete();




        // $data = ['data'=>$res->images];


        // $data = [];
        foreach($res->images as $image){
            if(!empty($image)){
                $oldImage = public_path($image->image);
                // $data[] = $image->image;
                if(file_exists($oldImage)){
                    unlink($oldImage);
                }
            }
        }

        $res->delete();
        if($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'];
        }
        return response()->json($data);


    }
}
