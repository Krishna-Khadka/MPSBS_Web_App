<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $data['header_title'] = 'Message';
        return view('Dashboard.admin.Message.message',$data);
    }


    public function DisplayMessage(){
        $messages = Contact::all();
        $output = "";
        $id = 0;

        foreach ($messages as $message) {
            $id++;
            $sendAt = Carbon::parse($message->created_at);
            $output .= "<tr>";
            $output .= "<td>{$id}</td>";
            $output .= "<td>{$message->name}</td>";
            $output .= "<td>{$message->email}</td>";
            $output .= "<td>{$message->subject}</td>";
            $output .= "<td>{$message->message}</td>";
            $output .= "<td>{$sendAt->format('F j, Y')}</td>";
            $output .= "</td>";

            $output .= "<td>";

            // edit icon
            // $output .= "<button type='button' class='btn btn-warning btn-sm editIcon' data-toggle='modal' data-target='#updateEventModal' data-event-id='{$message->id}'>";
            // $output .= "<i class='fas fa-edit'></i> Edit";
            // $output .= "</button>";

            // delete icon
            $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIcon' data-toggle='modal' data-target='#deleteEventModal' data-event-id='{$message->id}'>";
            $output .= "<i class='fas fa-trash'></i> Delete";
            $output .= "</button>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'data' => $messages,
            'messages' => $output
        ]);


    }


    public function DeleteMessage(Request $req){
        $id = $req->id;
        $res = Contact::find($id);
        $res->delete();

        // if(!empty($res->image_url)){
        //     $oldImage = public_path('storage/'.$res->image_url);
        //     if(file_exists($oldImage)){
        //         unlink($oldImage);
        //     }
        // }

        if($res){
            $data=[
                'status'=>'1',
                'msg'=>'success'];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'];
        }
        return response()->json($data);
    }
}
