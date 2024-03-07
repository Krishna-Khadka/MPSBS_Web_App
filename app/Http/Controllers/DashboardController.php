<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['header_title'] = 'Dashboard';
        if(!empty(Auth::check())){
            if(Auth::user()->user_type == 1)
            {
                return view('Dashboard.admin.admin', $data);

            }elseif(Auth::user()->user_type == 2)
            {
                return view('Dashboard.teacher.teacher',$data);

            }elseif(Auth::user()->user_type == 3)
            {
                return view('Dashboard.student.student',$data);

            }elseif(Auth::user()->user_type == 4)
            {
                return view('Dashboard.parent.parent',$data);
            }
         }
    }
}
