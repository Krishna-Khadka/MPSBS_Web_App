<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function showPostCategory(){
        $data['header_title'] = 'Post Category';
        return view('Dashboard.admin.Post.post-category',$data);
    }

    public function createCategory(Request $req){
        $category = new PostCategory();
        $category->title = $req->title;
        $category->description = $req->description;
        $data = $category->save();
        if($data){
            return response()->json(['status' => 200]);
        }
    }

    public function showCategory(){
        $categories = PostCategory::all();
        $output = "";

        foreach($categories as $category){
            $output .= "<tr>";
            $output .= "<td>{$category->title}</td>";
            $output .= "<td>{$category->description}</td>";
            $output .= "<td>";
            $output .= "<a href='' id='".$category->id."' class='mx-1 editIconCategory btn btn-primary' data-toggle='modal' data-target='#editPostCategoryModal' >Edit</a>";
            $output .= "<a href='' id='".$category->id."' class='mx-1 deleteIconCategory btn btn-danger'>Delete</a>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'categories' => $output
        ]);

    }

    public function deleteCategory(Request $req){
        $id = $req->id;
        $res = PostCategory::find($id);
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

    public function editCategory(Request $req){
        $id = $req->id;
        $categories = PostCategory::find($id);
        return response()->json($categories);
    }

    public function updateCategory(Request $req){
        $category = PostCategory::find($req->category_id);
        $category->title = $req->title;
        $category->description = $req->description;
        $res = $category->save();

        if($res){
          return response()->json(['status' => 200]);
        }

    }
}
