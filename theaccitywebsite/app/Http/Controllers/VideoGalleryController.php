<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoGalleryController extends GlobalController
{
    
    public function index()
    {
    $video_gallery = VideoGallery::where('status', '=', '1')->get(); // Fetch records where link is not 'company-images'
       
    return view('admin.video-gallery')
        ->with('globalinfo', $this->globalinfo())
        ->with('video_gallery', $video_gallery);
    }


    public function video_gallery_store(Request $request)
        {
        // Validate the request
        $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'title' => 'required|string|max:255',
        'link' => 'nullable|string',
        ]);
    
        // Retrieve the existing slider if it's an update
        $existingSlider = $request->id ? VideoGallery::find($request->id) : null;
        $fileName = $existingSlider ? $existingSlider->file_name : null;
    
        // Handle file upload if a new file is provided
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            $file->move(public_path('assets/images/video-gallery'), $fileName);
    
            // Optionally, delete the old file if it exists
            if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/video-gallery/' . $existingSlider->file_name))) {
                unlink(public_path('assets/images/video-gallery/' . $existingSlider->file_name));
            }
        }   
    
        // Save data to the database
        $inserted = VideoGallery::updateOrCreate(
            ['id' => $request->id],
            [
                'link' => $request->link,
                'title' => $request->title,
                'file_name' => $fileName,
                'status' => 1,
                'loginid' => Auth::id(),
            ]
        );
     // Return response
            if ($inserted) {
                return response()->json(['success'=>1,'message' => 'Video Upload has been saved successfully!'], 200);
            } else {
                return response()->json(['error' => 'Failed to added Video Upload Info.'], 500);
            }
    }


public function video_gallery_edit($id)
    {
        $video_gallery = VideoGallery::find($id);

        if (!$video_gallery) {
            return response()->json(['error' => 'Video not found'], 404);
        }
        return response()->json($video_gallery);
    }


public function video_gallery_destroy($id)
    {
        $slider = VideoGallery::findOrFail($id);
        // Delete the image file from the directory
        if ($slider->file_name && file_exists(public_path('assets/images/video-gallery/' . $slider->file_name))) {
            unlink(public_path('assets/images/video-gallery/' . $slider->file_name));
        }
        // Delete the slider from the database
        $slider->delete();
        return response()->json(['success' => true]);
    }

}

