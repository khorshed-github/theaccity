<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Subject;
use App\Models\Location;
use App\Models\Course;
use App\Models\CourseDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;          
use Illuminate\Support\Facades\DB;      
use App\Models\Slider;
use App\Models\PhotoGallery;
use App\Models\Committee;
use App\Models\News;
use App\Models\Qa;
use App\Models\StudentSupport;


class AppController extends GlobalController
{
    public function websites_dashboard(){
        
        $slider = Slider::where('type', 'slider')
        ->orderBy('id', 'desc')
        ->get();
        if ($slider->isEmpty()) {
            $slider = [];
        }
        
        $testimonial = Slider::where('type', 'testimonial')
        ->orderBy('id', 'desc')
        ->get();
        if ($testimonial->isEmpty()) {
            $testimonial = [];
        }
        
        $consultants = Slider::where('type', 'consultants')
        ->orderBy('id', 'desc')
        ->get();
        if ($consultants->isEmpty()) {
            $consultants = [];
        }
        
        $qa = Qa::where('type', 'question-answer')
        ->orderBy('id', 'desc')
        ->get();
        if ($qa->isEmpty()) {
            $qa = [];
        }
        
        $university = University::where('status', '1')
        ->orderBy('id', 'desc')
        ->get();
        if ($university->isEmpty()) {
            $university = [];
        }
        
        $blogs = News::where('status', '1')
        ->orderBy('id', 'desc')
        ->get();
        if ($blogs->isEmpty()) {
            $blogs = [];
        }
        
        $location = Location::where('status', '1')
        ->orderBy('id', 'desc')
        ->get();
        if ($location->isEmpty()) {
            $location = [];
        }
        
        $subject = Subject::where('status', '1')
        ->orderBy('id', 'desc')
        ->get();
        if ($subject->isEmpty()) {
            $subject = [];
        }
        
        $course = Course::where('status', '1')
        ->orderBy('id', 'asc')
        ->get();
        if ($course->isEmpty()) {
            $course = [];
        }
        
        return view('web/index')
        ->with('sliders', $slider)
        ->with('testimonials', $testimonial)
        ->with('consultants', $consultants)
        ->with('qas', $qa)
        ->with('blogs', $blogs)
        ->with('university', $university)
        ->with('location', $location)
        ->with('subject', $subject)
        ->with('course', $course);
        
    }
    
    public function page_views($pagename,$id){
            
            $news = StudentSupport::where('submenuid', $id)
            ->orderBy('id', 'desc')
            ->get();
            
            if ($news->isEmpty()) {
            $news = [];
            }
            
            $submenu = DB::table('submenu as sm')
            ->leftJoin('student_support as n', function ($join) {
                $join->on('sm.id', '=', 'n.submenuid')
                    ->where('n.status', 1);
            })
            ->select('sm.id', 'sm.name', 'sm.status', DB::raw('COUNT(n.id) as total_news')) // শুধুমাত্র প্রয়োজনীয় কলাম নিন
            ->where('sm.status', 1)
            ->groupBy('sm.id', 'sm.name', 'sm.status') // GROUP BY সব selected কলাম 
            ->inRandomOrder()
            ->limit(6)
            ->get();
            
            if ($submenu->isEmpty()) {
            $submenu = [];
            }
            
            $visit = StudentSupport::where('status', 1)
            ->orderBy('visit', 'desc')
            ->limit(5)
            ->get();
            
            if ($visit->isEmpty()) {
            $visit = [];
            }
            
            
            return view('web/student-support-summary')
            ->with('news', $news)
            ->with('submenu',$submenu)
            ->with('visit',$visit)
            ->with('pagename', $pagename);
    }
    
    public function admin_dashboard(){

    $univerity = University::count();
    $subject = Subject::count();
    $courseDetails = CourseDetails::count();

    // Pass data to the view
    return view('admin/index')
        ->with('globalinfo', $this->globalinfo()) 
        ->with('univerity', $univerity)
        ->with('subject', $subject)
        ->with('courseDetails', $courseDetails);

    }
    public function logout()
    {
        Auth::logout();
        session_destroy();
        return redirect('/login');
    }
}
