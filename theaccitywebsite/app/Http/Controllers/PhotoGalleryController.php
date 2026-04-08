<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoGalleryController extends GlobalController
{
    
    public function index()
    {
    $album = Album::where('status', '=', '1')->get(); // Fetch records where type is not 'company-images'
        $photo_gallery = DB::table('photo-gallery')
        ->leftJoin('album', 'album.id', '=', 'photo-gallery.type') // Join with salesman table
        ->select('photo-gallery.*', 'album.title as type') // Select sales fields and seller's name
        ->get();  
    //$photo_gallery = PhotoGallery::where('status', '=', '1')->get(); // Fetch records where type is not 'company-images'
    return view('admin.photo-gallery')
        ->with('globalinfo', $this->globalinfo())
        ->with('album', $album)
        ->with('photo_gallery', $photo_gallery);
    }


    public function photo_gallery_store(Request $request)
        {
        // Validate the request
        $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'title' => 'required|string|max:255',
        'type' => 'nullable|string',
        ]);
    
        // Retrieve the existing slider if it's an update
        $existingSlider = $request->id ? PhotoGallery::find($request->id) : null;
        $fileName = $existingSlider ? $existingSlider->file_name : null;
    
        // Handle file upload if a new file is provided
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            $file->move(public_path('assets/images/photo-gallery'), $fileName);
    
            // Optionally, delete the old file if it exists
            if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/photo-gallery/' . $existingSlider->file_name))) {
                unlink(public_path('assets/images/photo-gallery/' . $existingSlider->file_name));
            }
        }   
    
        // Save data to the database
        $inserted = PhotoGallery::updateOrCreate(
            ['id' => $request->id],
            [
                'type' => $request->type,
                'title' => $request->title,
                'file_name' => $fileName,
                'status' => 1,
                'loginid' => Auth::id(),
            ]
        );
     // Return response
            if ($inserted) {
                return response()->json(['success'=>1,'message' => 'Image Upload has been saved successfully!'], 200);
            } else {
                return response()->json(['error' => 'Failed to added Image Upload Info.'], 500);
            }
    }


public function photo_gallery_edit($id)
    {
        $photo_gallery = PhotoGallery::find($id);

        if (!$photo_gallery) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        return response()->json($photo_gallery);
    }


public function photo_gallery_destroy($id)
    {
        $slider = PhotoGallery::findOrFail($id);
        // Delete the image file from the directory
        if ($slider->file_name && file_exists(public_path('assets/images/photo-gallery/' . $slider->file_name))) {
            unlink(public_path('assets/images/photo-gallery/' . $slider->file_name));
        }
        // Delete the slider from the database
        $slider->delete();
        return response()->json(['success' => true]);
    }

}

