<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlbumController extends GlobalController
{
    public function index()
    {
        $cm = Album::all();
        return view('admin/album')
            ->with('globalinfo', $this->globalinfo())
            ->with('album', $cm);
    }    


    public function Album_Store(Request $request)
{
    // Validate the request
    $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Allow only image files with a max size of 2MB
        'title' => 'required|string|max:255',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? Album::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/images/Album'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/Album/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/Album/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $News = Album::updateOrCreate(
        ['id' => $request->id],
        [
            'title' => $request->title,
            'file_name' => $fileName,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function Album_Edit($id)
{
    $slider = Album::find($id);

    if (!$slider) {
        return response()->json(['error' => 'News not found'], 404);
    }

    return response()->json($slider);
}


public function Album_Destroy($id)
{
    $slider = Album::findOrFail($id);

    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/Album/' . $slider->file_name))) {
        unlink(public_path('assets/images/Album/' . $slider->file_name));
    }

    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
}

}

