<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data['header_title'] = "About";
        return view('Frontend.About.about',$data);
    }
}
