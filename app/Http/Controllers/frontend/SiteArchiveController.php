<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use Illuminate\Http\Request;

class SiteArchiveController extends Controller
{
    function index() {
        $archive = Archive::with('images')->where('published', '=', '1')->get();
        $content = compact('archive');
        return view('Frontend.Archive.school-archive',$content);
    }

    function archiveDetail($slug) {
        $archive = Archive::with('images')->where('slug',$slug)->first();
        $content = compact('archive');
        return view('Frontend.Archive.archive-detail',$content);

    }
}
