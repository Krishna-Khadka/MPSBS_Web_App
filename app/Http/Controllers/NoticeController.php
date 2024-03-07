<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoticeController extends Controller
{

    public function notices(){
        $data['header_title'] = 'Our School Notices';
        return view('Dashboard.Notice.notices',$data);
    }

    public function createNotice(Request $req){
        $notice = new Notice();
        $notice->title = $req->title;
        $notice->slug = $this->generateSlug($req->title);
        $notice->content = $req->content;
        // $notice->thumbnail = $this->uploadThumbnail($req->file('thumbnail'));
        $notice->published_date = $req->published_date;
        $notice->expiry_date = $req->expiry_date;
        $notice->is_active = $req->is_active;

        if($req->hasFile('thumbnail')){
            $image = $req->file('thumbnail');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'uploads';
            $image->storeAs($directory, $imageName, 'public');
            $notice->thumbnail = $directory . '/' . $imageName;
        }
        $data = $notice->save();
        if($data){
            return response()->json([
                'status' => 200
            ]);
        }

    }

    private function generateSlug($title)
    {
        return Str::slug($title);
    }

    public function DisplayNotice(){
        $notices = Notice::all();
        $output = "";
        $id = 0;

        foreach($notices as $notice){
            $id++;
            $output .= "<tr>";
            $output .= "<td>{$id}</td>";
            $output .= "<td>{$notice->title}</td>";
            $content = strlen($notice->content) > 20 ? substr($notice->content, 0, 20) . '...' : $notice->content;
            $output .= "<td>{$content}</td>";
            $output .= "<td><img src=\"storage/{$notice->thumbnail}\"  width='100px' alt=\"Post Image\"></td>";
            $output .= "<td>{$notice->published_date}</td>";
            $output .= "<td>{$notice->expiry_date}</td>";
            $output .= "<td>{$notice->is_active}</td>";
            $output .= "<td>";

               // edit icon
               $output .= "<button type='button' class='btn btn-warning btn-sm editIcon' data-toggle='modal' data-target='#editNoticeModal' data-event-id='{$notice->id}'>";
               $output .= "<i class='fas fa-edit'></i> Edit";
               $output .= "</button>";

               // delete icon
               $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIcon' data-toggle='modal' data-target='#deleteNoticeModal' data-event-id='{$notice->id}'>";
               $output .= "<i class='fas fa-trash'></i> Delete";
               $output .= "</button>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'notices' => $output
        ]);
    }

    // get method
    public function edit(Request $req){
        $id = $req->id;
        $notice = Notice::find($id);
        return response()->json($notice);
    }

    public function updateNotice(Request $req){
        $notice = Notice::find($req->notice_id);
        $notice->title = $req->title;
        $notice->slug = $this->generateSlug($req->title);
        $notice->content = $req->content;
        // $notice->thumbnail = $this->uploadThumbnail($req->file('thumbnail'));
        $notice->published_date = $req->published_date;
        $notice->expiry_date = $req->expiry_date;
        $notice->is_active = $req->is_active;
        if($req->hasFile('thumbnail')){
            $newImage = $req->file('thumbnail');
            $imageName = time() . '_' . $newImage->getClientOriginalName();
            $directory = 'uploads';
            $newImage->storeAs($directory, $imageName, 'public');
            if(!empty($notice->thumbnail)){
                $oldImage = public_path('storage/'.$notice->thumbnail);
                if(file_exists($oldImage)){
                    unlink($oldImage);
                }
            }
            $notice->thumbnail = $directory . '/' . $imageName;

        }
        $res = $notice->save();

        if($res){
          return response()->json(['status' => 200]);
        }

    }

    public function DeleteNotice(Request $req){
        $id = $req->id;
        $res = Notice::find($id);
        $res->delete();

        if(!empty($res->thumbnail)){
            $oldImage = public_path('storage/'.$res->thumbnail);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }
        }

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
