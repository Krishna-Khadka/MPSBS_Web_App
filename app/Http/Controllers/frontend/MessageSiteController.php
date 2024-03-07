<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageSiteController extends Controller
{
    public function index(){
        $data['header_title'] = 'Message';
        return view('Frontend.Message.message',$data);
    }
}
