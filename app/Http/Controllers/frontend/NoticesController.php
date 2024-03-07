<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function index(){
        $data['header_title'] = 'Notice';
        $notices = Notice::orderBy('published_date','desc')->get();
        $content = compact('notices');
        return view('Frontend.Notice.notices',$content,$data);
    }
}
