<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){
        $data['header_title'] = 'Programs';
        return view('Frontend.Program.programs',$data);
    }
}
