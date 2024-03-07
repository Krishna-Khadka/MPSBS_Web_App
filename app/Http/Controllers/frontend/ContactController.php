<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['header_title'] = 'Contact';
        return view('Frontend.Contact.contact');
    }


    public function saveMessage(Request $request){
        // $request->validate([
        //     'name' =>'required|string',
        //     'email' =>'required|string',
        //  'subject' =>'required|string',
        //  'message' =>'required|string',
        // ]);

        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        $response = ['status' => 200 ];
        return response()->json($response);
    }
}
