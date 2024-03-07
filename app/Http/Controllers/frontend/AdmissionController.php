<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        $data['header_title'] = 'Admission';
        return view('Frontend.Admission.admission',$data);
    }
}
