<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    public function index(){
        $data['header_title'] = 'Mission';
        return view('Frontend.Vision.mission-vision',$data);
    }
}
