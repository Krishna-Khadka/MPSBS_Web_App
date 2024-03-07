<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function user(){
        $data['header_title'] = 'Add User';
        return view('Dashboard.admin.admin-list',$data); 
    }

    public function ShowUser(){
        $data['header_title'] = 'Add User';
        // return view('Dashboard.admin.admin-list',$data);
        $users = DB::table('users')->get();
        $output = "";
        // $output .= "<tbody>";
        foreach($users as $user){
            $output .= "<tr>";
            $output .= "<td>{$user->id}</td>";
            $output .= "<td>{$user->name}</td>";
            $output .= "<td>{$user->email}</td>";
            $output .= "<td>{$user->user_type}</td>";
            $output .= "<td>";
            $output .= "<a href='' id='".$user->id."' class='mx-1 editIcon btn btn-primary' data-toggle='modal' data-target='#editUserModal' >Edit</a>";
            $output .= "<a href='' id='".$user->id."' class='mx-1 deleteIcon btn btn-danger'>Delete</a>";
            $output .= "</td>";
            $output .= "</tr>";
        }
        // echo $output;
        return response()->json([
            'users' => $output
        ]);
    }

    
    public function addUser(Request $req){
        // dd($req->all());
        
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'user_type' => $req->user_type
        ];
        $user = DB::table('users')->insert($data);

        return response()->json([
            'status'=>200
        ]);
     }

     // handle edit user ajax request
     public function edit(Request $req){
        $id = $req->id;
        $user = DB::table('users')->find($id);
        return response()->json($user);
     }

     public function UpdateUser(Request $req){
        try {
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'user_type' => $req->user_type
            ];
    
            $user = DB::table('users')->where('id', $req->user_id);
            
            $sql = $user->toSql();

            $user->update($data);

            if ($user) {
                return response()->json([
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'status' => 100,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage() 
            ]);
        }
     }

     // handle delete emplyee ajax request
     public function DeleteUser(Request $req){
        // return response()->json($req->all());
        $id = $req->id;
        $user = DB::table('users')->where('id', $id)->delete();
        if($user) {
            return response()->json([
                'status' => 200,
                'message' => "deleted successfully"
            ]); 
        }else{
            return response()->json([
                'status' => 500,
                'message' => 'not deleted'
            ]);
        }
     }
}


