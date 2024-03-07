<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use Illuminate\Http\Request;

class SchoolProfileController extends Controller
{
    public function index(){
        $data['header_title'] = 'School Profile';
        $sp = SchoolProfile::first();
        $content = compact('sp');
        return view("Dashboard.admin.School-Profile.school-profile",$content,$data);
    }

    public function SchooInfo(Request $request){
        // $schoolInfo = new SchoolProfile();
        //about_us,mission_vision,why_choose_us,message
        // dd($request->all());

        $schoolInfo = SchoolProfile::find($request->id);
        // dd($schoolInfo);
        $schoolInfo->about_us = $request->about_us;
        $schoolInfo->mission_vision = $request->mission_vision;
        $schoolInfo->why_choose_us = $request->why_choose_us;
        $schoolInfo->history = $request->history;
        $schoolInfo->message = $request->message;
        $result = $schoolInfo->save();

        $response = [
            'status'=>200,
            'data' => $request->all(),
        ];

        if($result){
            return response()->json($response);
        }
    }

    function ContactInfo(Request $request) {
        $contactInfo = SchoolProfile::find($request->id);
        // dd($contactInfo);
        $contactInfo->email = $request->email;
        $contactInfo->secondary_email = $request->secondary_email;
        $contactInfo->telephone = $request->telephone;
        $contactInfo->contact_no = $request->contact_no;
        $contactInfo->secondary_contact_no = $request->secondary_contact_no;
        $contactInfo->website_url = $request->website_url;
        $contactInfo->address = $request->address;
        $result = $contactInfo->save();

        $response = [
           'status'=>200,
            // 'data' => $request->all(),
        ];

        if($result){
            return response()->json($response);
        }
    }

}
