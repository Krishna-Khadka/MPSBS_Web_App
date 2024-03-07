<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SiteGalleryController extends Controller
{
    // function index() {
    //     $categories = GalleryCategory::all();
    //     $content = compact('categories');
    //     return view('Frontend.Gallery.gallery',$content);
    // }

    function index() {
        $categories = Gallery::with('images')->get();
        // $categoryID = Crypt::encrypt($categories->id);
        $content = compact('categories');
        return view('Frontend.Gallery.gallery',$content);
    }
}
