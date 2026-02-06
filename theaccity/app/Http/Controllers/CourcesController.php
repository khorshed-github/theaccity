<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\University;
use App\Models\Location;
use App\Models\Course;
use App\Models\CourseDetails;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourcesController extends GlobalController
{
    
public function Country()
    {
        $cm = Country::all();
        return view('admin/country')
            ->with('globalinfo', $this->globalinfo())
            ->with('country', $cm);
    }    


public function Country_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Allow only image files with a max size of 2MB
        'name' => 'required|string|max:255',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? Country::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/images/Country'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/Country/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/Country/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $News = Country::updateOrCreate(
        ['id' => $request->id],
        [
            'name' => $request->name,
            'file_name' => $fileName,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function Country_Edit($id)
    {
    $slider = Country::find($id);

    if (!$slider) {
        return response()->json(['error' => 'News not found'], 404);
    }

    return response()->json($slider);
    }


public function Country_Destroy($id)
    {
    $slider = Country::findOrFail($id);

    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/Country/' . $slider->file_name))) {
        unlink(public_path('assets/images/Country/' . $slider->file_name));
    }

    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
    }
    
public function University()
    {
        $cm = University::all();
        return view('admin/university')
            ->with('globalinfo', $this->globalinfo())
            ->with('university', $cm);
    } 
    
public function University_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'file_name' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Allow only image files with a max size of 2MB
        'name' => 'required|string|max:255',
    ]);

    // Retrieve the existing slider if it's an update
    $existingSlider = $request->id ? University::find($request->id) : null;
    $fileName = $existingSlider ? $existingSlider->file_name : null;

    // Handle file upload if a new file is provided
    if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/images/University'), $fileName);

        // Optionally, delete the old file if it exists
        if ($existingSlider && $existingSlider->file_name && file_exists(public_path('assets/images/University/' . $existingSlider->file_name))) {
            unlink(public_path('assets/images/University/' . $existingSlider->file_name));
        }
    }   

    // Save data to the database
    $News = University::updateOrCreate(
        ['id' => $request->id],
        [
            'name' => $request->name,
            'file_name' => $fileName,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function University_Edit($id)
    {
    $slider = University::find($id);

    if (!$slider) {
        return response()->json(['error' => 'University not found'], 404);
    }

    return response()->json($slider);
    }


public function University_Destroy($id)
    {
    $slider = University::findOrFail($id);

    // Delete the image file from the directory
    if ($slider->file_name && file_exists(public_path('assets/images/University/' . $slider->file_name))) {
        unlink(public_path('assets/images/University/' . $slider->file_name));
    }
    $slider->delete();

    return response()->json(['success' => true]);
    }
    
public function Location()
    {
        $cm = DB::table('location')
        ->leftJoin('country', 'location.cid', '=', 'country.id') // Join suppliers table
        ->select('location.*', 'country.name as cname') // Select necessary fields
        ->get();
        $country = DB::table('country')->get();
        return view('admin/location')
            ->with('globalinfo', $this->globalinfo())
            ->with('country', $country)
            ->with('location', $cm);
    }    


public function Location_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'cid' => 'required|int|max:11',
        'name' => 'required|string|max:255',
    ]);

    // Save data to the database
    $location = Location::updateOrCreate(
        ['id' => $request->id],
        [
            'name' => $request->name,
            'cid' => $request->cid,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function Location_Edit($id)
    {
    $slider = Location::find($id);

    if (!$slider) {
        return response()->json(['error' => 'Location not found'], 404);
    }

    return response()->json($slider);
    }


public function Location_Destroy($id)
    {
    $slider = Location::findOrFail($id);
    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
    }
    
    
public function Course()
    {
       $cm = Course::all();
        return view('admin/course')
            ->with('globalinfo', $this->globalinfo())
            ->with('course', $cm);
    }    


public function Course_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Save data to the database
    $Course = Course::updateOrCreate(
        ['id' => $request->id],
        [
            'name' => $request->name,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function Course_Edit($id)
    {
    $slider = Course::find($id);

    if (!$slider) {
        return response()->json(['error' => 'Course not found'], 404);
    }

    return response()->json($slider);
    }


public function Course_Destroy($id)
    {
    $slider = Course::findOrFail($id);
    // Delete the slider from the database
    $slider->delete();

    return response()->json(['success' => true]);
    }
    
    
public function Subject()
    {
       $cm = Subject::all();
        return view('admin/subject')
            ->with('globalinfo', $this->globalinfo())
            ->with('subject', $cm);
    }    


public function Subject_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Save data to the database
    $Subject = Subject::updateOrCreate(
        ['id' => $request->id],
        [
            'name' => $request->name,
            'status' => $request->status,
            'loginid' => Auth::id(),
        ]
    );

    return response()->json(['success' => true]);
}


public function Subject_Edit($id)
    {
    $slider = Subject::find($id);
    if (!$slider) {
        return response()->json(['error' => 'Subject not found'], 404);
    }
    return response()->json($slider);
    }


public function Subject_Destroy($id)
    {
    $slider = Subject::findOrFail($id);
    // Delete the slider from the database
    $slider->delete();
    return response()->json(['success' => true]);
    }
    
public function Course_details()
    {
       $cm = CourseDetails::all();
       $country = Country::all();
       $university = University::all();
       $subject = Subject::all();
       $course = Course::all();
        return view('admin/course-details')
            ->with('globalinfo', $this->globalinfo())
            ->with('country', $country)
            ->with('university', $university)
            ->with('subject', $subject)
            ->with('course', $course)
            ->with('course_details', $cm);
    }  
    
public function Course_details_add($id = null)
    {
       $courseDetails = $id ? CourseDetails::findOrFail($id) : null;
       $country = Country::all();
       $university = University::all();
       $subject = Subject::all();
       $course = Course::all();
        return view('admin/course-details-add')
            ->with('globalinfo', $this->globalinfo())
            ->with('country', $country)
            ->with('university', $university)
            ->with('subject', $subject)
            ->with('course', $course)
            ->with('course_details', $courseDetails);
    }  
    
public function Course_details_Store(Request $request)
    {
    // Validate the request
    $request->validate([
        'title' => 'required|string|max:255',
        'university_id' => 'required|int|max:255',
        'subject_id' => 'required|int|max:255',
        'course_id' => 'required|int|max:255',
    ]);
    $id = $request->id;
    // Save data to the database
       $data = [
            'country_id' => $request->country_id,
            'location_id' => json_encode($request->location_id),
            'university_id' => $request->university_id,
            'subject_id' => $request->subject_id,
            'course_id' => $request->course_id,
            'intake' => json_encode($request->intake),
            'course_duration' => json_encode($request->course_duration),
            'assessment_required' => $request->assessment_required,
            'title' => $request->title,
            'course_link' => $request->course_link,
            'course_link2' => $request->course_link2,
            'shot_desc' => $request->shot_desc,
            'requirement' => $request->requirement,
            'requirement2' => $request->requirement2,
            'schedule' => $request->schedule,
            'fees' => $request->fees,
            'interview' => $request->interview,
            'delivery_mode' => json_encode($request->delivery_mode),
            'entry_route' => json_encode($request->entry_route),
            'status' => 1,
            'loginid' => Auth::id(),
        ];
    
    if ($id) {
        // Update existing
        CourseDetails::where('id', $id)->update($data);
        $message = 'Course details updated successfully.';
    } else {
        // Create new
        CourseDetails::create($data);
        $message = 'Course details created successfully.';
    }

    return response()->json(['success' => true]);
}

public function Course_details_Edit($id){
    
       $courseDetails = CourseDetails::findOrFail($id);
       if ($courseDetails) {
            $courseDetails->delivery_mode = json_decode($courseDetails->delivery_mode ?? '[]', true);
            $courseDetails->intake = json_decode($courseDetails->intake ?? '[]', true);
            $courseDetails->course_duration = json_decode($courseDetails->course_duration ?? '[]', true);
            $courseDetails->entry_route = json_decode($courseDetails->entry_route ?? '[]', true);
            $courseDetails->location_id = json_decode($courseDetails->location_id ?? '[]', true);
        }
    
       $country = Country::all();
       $university = University::all();
       $subject = Subject::all();
       $course = Course::all();
       
        return view('admin/course-details-edit')
            ->with('globalinfo', $this->globalinfo())
            ->with('country', $country)
            ->with('university', $university)
            ->with('subject', $subject)
            ->with('course', $course)
            ->with('course_details', $courseDetails);
     
}

public function Course_details_OnOff($id)
    {
    $course = CourseDetails::findOrFail($id);
    $course->status = $course->status == 1 ? 0 : 1;
    $course->save();
    return response()->json([
        'success' => true,
        'new_status' => $course->status
    ]);
    }

    
public function Course_details_Destroy($id)
    {
    $slider = CourseDetails::findOrFail($id);
    // Delete the slider from the database
    $slider->delete();
    return response()->json(['success' => true]);
    }
    
public function country_to_location_change(Request $request)
    {
        $location = Location::where('cid', $request->id)->get(); // Fetch submenu based on menu ID
        return response()->json($location); // Return data as JSON
    }
    
public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $results = Course::where('name', 'LIKE', "%{$query}%")
                    ->take(10)
                    ->get();

        return response()->json($results);
    }
    

}

