<?php

namespace App\Http\Controllers;

use App\Models\ApplyCourse;
use App\Mail\CourseAppliedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ApplyCourseController extends GlobalController
{
    
    public function apply_course_request()
    {
        $cm = ApplyCourse::latest('id')->get();
        return view('admin/apply-course')
            ->with('globalinfo', $this->globalinfo())
            ->with('applycourse', $cm);
    }  
    
    public function store(Request $request)
        {
            $validated = $request->validate([
                'phone'     => 'required|string|max:20|unique:apply_course,phone',
                'email'     => 'required|email|max:255|unique:apply_course,email',
                'name'      => 'required|string|max:255',
                'country'   => 'required|string|max:50',
                'pref_day'  => 'required|string|max:50',
                'pref_time' => 'required|string|max:50',
            ]);
        
            // Save to database
            $course = ApplyCourse::create($validated);
        
            // Send confirmation to applicant + admin copy
            Mail::to($course->email)
                ->cc('info@theaccity.com')
                ->send(new CourseAppliedMail($validated));
        
            return back()->with('success', 'Course applied successfully! Confirmation email sent.');
        }

}

