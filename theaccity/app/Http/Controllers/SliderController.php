<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends GlobalController
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin/sliders')
            ->with('globalinfo', $this->globalinfo())
            ->with('sliders', $sliders);
    }    


    public function store(Request $request)
    {
    // Validate the request
    $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Allow only image files with a max size of 2MB
        'title' => 'required|string|max:255',
        'shot_desc' => 'nullable|string',
        'type' => 'nullable|string',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? Slider::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $fileName = $file->hashName();
        $file->move(public_path('assets/images/sliders'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/sliders/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/sliders/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $slider = Slider::updateOrCreate(
        ['id' => $request->id],
        [
            'type' => $request->type,
            'title' => $request->title,
            'designation' => $request->designation,
            'shot_desc' => $request->shot_desc,
            'file_name' => $fileName,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function edit($id)
{
    $slider = Slider::find($id);

    if (!$slider) {
        return response()->json(['error' => 'Slider not found'], 404);
    }

    return response()->json($slider);
}


public function destroy($id)
{
    $slider = Slider::findOrFail($id);

    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/sliders/' . $slider->file_name))) {
        unlink(public_path('assets/images/sliders/' . $slider->file_name));
    }

    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
}

}

