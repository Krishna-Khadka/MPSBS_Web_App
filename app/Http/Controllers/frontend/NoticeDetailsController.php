<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeDetailsController extends Controller
{
    public function index($slug){
        $data['header_title'] = "Notice Details";
        $notice = Notice::where('slug',$slug)->first();
        $content = compact('notice');
        return view('Frontend.Notice.notice-details',$data,$content);
    }
}
