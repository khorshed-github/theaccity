<?php

namespace App\Http\Controllers;

use App\Models\StudentSupport;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentSupportController extends GlobalController
{
    public function index()
    {
        $news = StudentSupport::latest('id')->get();
        $menu = Menu::latest('id')->get();
        $submenu = SubMenu::latest('id')->get();
        
        return view('admin/student-support')
            ->with('globalinfo', $this->globalinfo())
            ->with('news', $news)
            ->with('menu', $menu)
            ->with('submenu', $submenu);
    }    


public function StudentSupport_store(Request $request)
    {
    // Validate the request
    $request->validate([
    'menuid' => 'required|int',
    'submenuid' => 'required|int',
    'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    'title' => 'required|string|max:255',
    'shot_desc' => 'nullable|string',
    'author' => 'nullable|string',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? StudentSupport::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        
        $fileName = $file->hashName();
        
        $file->move(public_path('assets/images/student-support'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/student-support/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/student-support/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $inserted = StudentSupport::updateOrCreate(
        ['id' => $request->id],
        [
            'menuid' => $request->menuid,
            'submenuid' => $request->submenuid,
            'author' => $request->author,
            'title' => $request->title,
            'shot_desc' => $request->shot_desc,  // Laravel Helper
            'file_name' => $fileName,
            'status' => 1,
            'loginid' => Auth::id(),
        ]
    );
 // Return response
        if ($inserted) {
            return response()->json(['success'=>1,'message' => 'Student Support has been saved successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to added Student Support Info.'], 500);
        }
}


public function StudentSupport_edit($id)
{
    $news = StudentSupport::find($id);
    $menu = Menu::all();
    $submenu = SubMenu::all();
    return view('admin/student-support-edit')
    ->with('globalinfo', $this->globalinfo())
    ->with('news', $news)
    ->with('menu', $menu)
    ->with('submenu', $submenu);
}


public function StudentSupport_destroy($id)
{
    $slider = StudentSupport::findOrFail($id);
    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/student-support/' . $slider->file_name))) {
        unlink(public_path('assets/images/student-support/' . $slider->file_name));
    }

    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
}


public function menu_to_submenu_change(Request $request)
{
    $submenus = SubMenu::where('menuid', $request->id)->get(); // Fetch submenu based on menu ID
    return response()->json($submenus); // Return data as JSON
}


}

