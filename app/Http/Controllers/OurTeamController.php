<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class OurTeamController extends Controller
{
    public function index(){
        $data['header_title'] = 'Manage Team Members';
        $TeamsPosition = [];
        foreach(OurTeam::Position as $postionKey => $position){
            $TeamsPosition[$postionKey] = $position;
        }
        $content = compact('TeamsPosition');
        return view('Dashboard.Teams.team-members',$content,$data);
    }

    public function createTeam(Request $req){
        $team = new OurTeam();
        $team->name = $req->name;
        // $team->photo = $this->uploadPhoto($req->file('photo'));
        $team->position = $req->position;
        $team->role = $req->role;
        $team->contact = $req->contact;
        $team->address = $req->address;
        $team->email = $req->email;
        $team->facebook_url = $req->facebook_url;
        $team->instagram_url = $req->instagram_url;
        $team->is_active = $req->is_active;
        $team->DOJ = $req->DOJ;
        if($req->hasFile('photo')){
            $image = $req->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'uploads';
            $image->storeAs($directory, $imageName, 'public');
            $team->photo = $directory . '/' . $imageName;
        }
        $data = $team->save();
        if($data){
            return response()->json([
                'status' => 200
            ]);
        }

    }

    public function DisplayTeam(){
        $teams = OurTeam::all();
        $output = "";
        $id = 0;

        foreach($teams as $team){
            $id++;
            $eventDate = Carbon::parse($team->DOJ);
            $output .= "<tr>";
            $output .= "<td>{$id}</td>";
            $output .= "<td>{$team->name}</td>";
            // $output .= "<td>{$team->photo}</td>";
            $output .= "<td>{$team->position}</td>";
            $output .= "<td>{$team->role}</td>"; 
            $output .= "<td>{$team->contact}</td>";
            $output .= "<td>{$team->address}</td>"; 
            $output .= "<td>{$team->email}</td>"; 
            $output .= "<td>{$team->facebook_url}</td>"; 
            $output .= "<td>{$team->instagram_url}</td>";
            $output .= "<td>{$team->is_active}</td>";
            $output .= "<td>{$team->DOJ}</td>";
            // $output .= "<span class='mr-2'><i class='far fa-calendar-alt'></i> {$eventDate->format('F j, Y')}</span><br>";
            $output .= "<td>";

            // Edit icon
            $output .= "<button type='button' class='btn btn-warning btn-sm editIcon' data-toggle='modal' data-target='#editTeamModal' data-event-id='{$team->id}'>";
            $output .= "<i class='fas fa-edit'></i> Edit";
            $output .= "</button>";

            // Delete icon
            $output .= "<button type='button' class='btn btn-danger btn-sm ml-2 deleteIcon' data-toggle='modal' data-target='#deleteTeamModal' data-event-id='{$team->id}'>";
            $output .= "<i class='fas fa-trash'></i> Delete";
            $output .= "</button>";

            $output .= "</td>";
            $output .= "</tr>";

        }

        return response()->json([
            'teams' => $output
        ]);
    }


    // get method
    public function edit(Request $req){
        $id = $req->id;
        $notice = OurTeam::find($id);
        return response()->json($notice);
    }


    public function updateTeam(Request $req){
        $notice = OurTeam::find($req->team_id);
        $notice->name = $req->name;
        $notice->position = $req->position;
        $notice->role = $req->role;
        $notice->contact = $req->contact;
        $notice->address = $req->address;
        $notice->email = $req->email;
        $notice->facebook_url = $req->facebook_url;
        $notice->instagram_url = $req->instagram_url;
        $notice->is_active = $req->is_active;
        $notice->DOJ = $req->DOJ;
        if($req->hasFile('photo')){
            $newImage = $req->file('photo');
            $imageName = time() . '_' . $newImage->getClientOriginalName();
            $directory = 'uploads';
            $newImage->storeAs($directory, $imageName, 'public');
            if ($notice->image_url) {
                Storage::disk('public')->delete($notice->image_url);
            }
            $notice->photo = $directory . '/' . $imageName;

        }
        $res = $notice->save();

        if($res){
          return response()->json(['status' => 200]);
        }
        
    }


    public function DeleteTeam(Request $req){
        $id = $req->id;
        $res = OurTeam::find($id);
        $res->delete();

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
