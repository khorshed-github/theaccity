<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends GlobalController
{
    public function index()
    {
        $news = News::all();
        return view('admin/news')
            ->with('globalinfo', $this->globalinfo())
            ->with('news', $news);
    }    


public function News_store(Request $request)
{
    // Validate the request
    $request->validate([
    'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    'title' => 'required|string|max:255',
    'shot_desc' => 'nullable|string',
    'author' => 'nullable|string',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? News::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        
        $fileName = $file->hashName();
        
        $file->move(public_path('assets/images/news'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/news/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/news/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $inserted = News::updateOrCreate(
        ['id' => $request->id],
        [
            'type' => $request->type,
            'title' => $request->title,
            'shot_desc' => $request->shot_desc,  // Laravel Helper
            'file_name' => $fileName,
            'status' => 1,
            'loginid' => Auth::id(),
        ]
    );
 // Return response
        if ($inserted) {
            return response()->json(['success'=>1,'message' => 'News has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added News Info.'], 500);
        }
}


public function news_edit($id)
{
    $news = News::find($id);
    return view('admin/news-edit')
    ->with('globalinfo', $this->globalinfo())
    ->with('news', $news);
}


public function news_destroy($id)
{
    $slider = News::findOrFail($id);
    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/news/' . $slider->file_name))) {
        unlink(public_path('assets/images/news/' . $slider->file_name));
    }

    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
}


}

