<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function showPosts(){
        $data['header_title'] = "Posts & News";
        $posts = Post::with('category')->get();
        $categories = PostCategory::all();
        $users = User::all();
        $content = compact('posts','categories','users');
        return view('Dashboard.admin.Post.post',$content,$data);
    }

    public function savePost(Request $request){
        $post = new Post();
        $post->user_id = $request->user_id;
        $post->post_categories_id = $request->post_categories_id;
        $post->title = $request->title;
        $post->slug = $this->generateSlug($request->title);
        $post->description = $request->description;
        $post->post_type = $request->post_type;
        $post->status = $request->status;
        $post->published_at = $request->published_at;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'uploads';
            $image->storeAs($directory, $imageName, 'public');
            $post->image_url = $directory . '/' . $imageName;
        }

        $data = $post->save();

        if($data){
            return response()->json(['status' => 200]);
        }
    }

    private function generateSlug($title)
    {
        return Str::slug($title);
    }

    public function posts(){
        $posts = Post::with('category')->with('user')->get();
        // dd($posts); exit;
        $output = "";
        $i = 0;

        foreach ($posts as $post) {
            $i++;
            $output .= "<tr>";
            $output .= "<td>{$i}</td>";
            $output .= "<td>{$post->user->name}</td>";
            $output .= "<td>{$post->category->title}</td>";
            $output .= "<td>{$post->title}</td>";
            // $output .= "<td>{$post->slug}</td>";
            $description = strlen($post->description) > 20 ? substr($post->description, 0, 20) . '...' : $post->description;
            $output .= "<td>{$description}</td>";
            $output .= "<td><img src=\"storage/{$post->image_url}\"  width='100px' alt=\"Post Image\"></td>";

            $output .= "<td>{$post->post_type}</td>";
            $output .= "<td>{$post->status}</td>";
            $output .= "<td>" . Carbon::parse($post->published_at)->format('F j, Y g:i A') . "</td>";
            $output .= "<td>";
            $output .= "<a href='' id='".$post->id."' class='mx-1 editPostIcon btn btn-primary' data-toggle='modal' data-target='#editPostModal' >Edit</a>";
            $output .= "<a href='' id='".$post->id."' class='mx-1 deleteIcon btn btn-danger'>Delete</a>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'posts' => $output
        ]);
    }


    public function showEdit(){
        return view('Dashboard.admin.Post.edit-post');
    }

    public function edit(Request $req){
        $id = $req->id;
        $posts = Post::find($id);
        return response()->json($posts);
    }

    public function updatePost(Request $request){
        $post = Post::find($request->post_id);
        $post->user_id = $request->user_id;
        $post->post_categories_id = $request->post_categories_id;
        $post->title = $request->title;
        $post->slug = $this->generateSlug($request->title);
        $post->description = $request->description;
        $post->post_type = $request->post_type;
        $post->status = $request->status;
        $post->published_at = $request->published_at;

        if(!empty($post->image_url)){
            $oldImage = public_path('storage/'.$post->image_url);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }

            // $file = $request->file('image');
            // $fileName = time() . '.' . $file->getClientOriginalExtension();
            // $file->move(public_path('images'), $fileName);
            // $post->image = $fileName;

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'uploads';
            $image->storeAs($directory, $imageName, 'public');
            $post->image_url = $directory . '/' . $imageName;
            // print_r($oldImage);
        }

        $data = $post->save();

        if($data){
            return response()->json(['status' => 200]);
        }
    }

    public function DeletePost(Request $req){
        $id = $req->id;
        $res = Post::find($id);
        $res->delete();
        if(!empty($res->image_url)){
            $oldImage = public_path('storage/'.$res->image_url);
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
