<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ImageGalleryController extends Controller
{
    // function index($id)  {
    //     $galleries = Gallery::with(['category','images'])
    //     ->whereHas('category', function ($query) use ($id) {
    //         $query->where('id', $id);
    //     })->get();
    //     $content = compact('galleries');
    //     return view("Frontend.Gallery.image-gallery",$content);
    // }

    function index($encryptedId)  {
        $id =$decrypted = Crypt::decrypt($encryptedId);
        $galleries = Gallery::with('images')->where('id', $id)->get();
        $content = compact('galleries');
        return view("Frontend.Gallery.image-gallery",$content);
    }
}
