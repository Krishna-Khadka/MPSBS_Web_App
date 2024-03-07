<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // public function upload(Request $req){
    //     if($req->hasFile('upload')){
    //         $originName = $req->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $req->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;
    //         $req->file('upload')->move(public_path('media', $fileName));

    //         $url = asset('media/' . $fileName);
    //         return response()->json([
    //             'fileName' => $fileName,
    //             'uploaded' => 1,
    //             'url' => $url
    //         ]);

    //     }
    // }

    // public function upload(Request $req){
    //     try {
    //         if($req->hasFile('upload')){
    //             $originName = $req->file('upload')->getClientOriginalName();
    //             $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //             $extension = $req->file('upload')->getClientOriginalExtension();
    //             $fileName = $fileName . '_' . time() . '.' . $extension;
    //             $req->file('upload')->move(public_path('media'), $fileName);
    
    //             $url = asset('media/' . $fileName);
    //             return response()->json([
    //                 'fileName' => $fileName,
    //                 'uploaded' => 1,
    //                 'url' => $url
    //             ]);
    //         } else {
    //             throw new \Exception('No file uploaded.');
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'error' => $e->getMessage(),
    //             'uploaded' => 0,
    //             'url' => null
    //         ]);
    //     }
    // }
    public function upload(Request $request)
    {
        try {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('media'), $fileName);
    
                $url = asset('media/' . $fileName);
    
                return response()->json([
                    'uploaded' => true,
                    'url' => $url,
                ]);
            } else {
                return response()->json([
                    'uploaded' => false,
                    'error' => 'No file uploaded.',
                ], 400); // 400 Bad Request status code for missing file
            }
        } catch (\Exception $e) {
            return response()->json([
                'uploaded' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

    
}
