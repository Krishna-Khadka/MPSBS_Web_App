<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\ArchiveImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArchiveController extends Controller
{
    function index(){
        $data['header_title'] = 'Archive';
        $category = Archive::category;
        $content = compact('category');
        return view('Dashboard.admin.Archive.archive',$content,$data);

    }

    function ArchiveStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            // 'slug'=>'required|string',
            'description' => 'required|string',
            // 'category' => 'required|string',
            // 'images' => 'nullable|json',
            'date' => 'required|date',
            // 'documents' => 'required|json',
            'published' => 'boolean',
        ]);

        $archive = new Archive();
        $archive->title = $request->title;
        $archive->slug = $this->generateSlug($request->title);
        $archive->description = $request->description;
        $archive->category = $request->category;
        $archive->date = $request->date;
        $archive->published = $request->status;
        $archive->save();

        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $key . '-' . time() . '.' . $extension;

                $path = "uploads/Gallery/";
                $file->move($path, $filename);

                $archiveImage = new ArchiveImage();
                $archiveImage->archive_id = $archive->id;
                $archiveImage->images = $path . $filename;
                $archiveImage->save();
            }
        } else {
            $archive->save();
        }

        $response = [
            'message' => 'Archive Created Successfully',
        ];

        return response()->json($response, 201);
    }

    private function generateSlug($title)
    {
        return Str::slug($title);
    }


    public function DisplayArchive(){
        $archives = Archive::all();
        $output = "";
        $i = 0;

        foreach($archives as $archive){
            $i++;
            $output .= "<tr>";
            $output .= "<td>{$i}</td>";
            $output .= "<td>{$archive->title}</td>";
            $description = strlen($archive->description) > 20 ? substr($archive->description, 0, 20) . '...' : $archive->description;
            $output .= "<td>{$description}</td>";

            // $output .= "<td>{$archive->category}</td>";
            $output .= "<td>" . ucwords($archive->category) . "</td>";
            // $output .= "<td>{$archive->published}</td>";
            $output .= "<td><span class='badge " . ($archive->published == 1 ? 'bg-success' : 'bg-secondary') . "'>" . ($archive->published == 1 ? 'Published' : 'Unpublished') . "</span></td>";
            $output .= "<td>" . Carbon::parse($archive->date)->format('F j, Y') . "</td>";
            $output .= "<td>";

               // edit icon
               $output .= "<button type='button' class='btn btn-warning btn-sm editIconEC' data-toggle='modal' data-target='#editArchiveModal' data-event-id='{$archive->id}'>";
               $output .= "<i class='fas fa-edit'></i> Edit";
               $output .= "</button>";

               // delete icon
               $output .= "<button type='button' class='btn btn-danger btn-sm  ml-2 deleteIconEC' data-toggle='modal' data-target='#deleteArchiveModal' data-event-id='{$archive->id}'>";
               $output .= "<i class='fas fa-trash'></i> Delete";
               $output .= "</button>";
            $output .= "</td>";
            $output .= "</tr>";
        }

        return response()->json([
            'archives' => $output
        ]);
    }
}
