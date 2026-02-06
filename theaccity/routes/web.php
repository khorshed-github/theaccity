<?php
ob_start();
session_start();

use App\Http\Controllers\LocationController;
use App\Http\Controllers\QaController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\StudentSupportController;

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ApplyCourseController;


use App\Models\Qa;
use App\Models\Country;
use App\Models\University;
use App\Models\Location;
use App\Models\Subject;
use App\Models\Course;

use App\Models\Slider;
use App\Models\News;
use App\Models\Section;
use App\Models\CourseDetails;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\StudentSupport;
use App\Models\Album;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use App\Models\ApplyCourse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () { return view('admin/login'); })->name('login'); 
Route::post('/loginuser','App\Http\Controllers\LoginController@index');
Route::get('/logout','App\Http\Controllers\AppController@logout');

Route::get('/admin_dashboard', 'App\Http\Controllers\AppController@admin_dashboard')->middleware('auth');

Route::get('/menu', 'App\Http\Controllers\MenuController@index')->middleware('auth');
Route::get('/AddNewMenu', 'App\Http\Controllers\MenuController@addMenuForm')->middleware('auth');
Route::post('/MenuRegisterForm', 'App\Http\Controllers\MenuController@MenuRegisterForm')->middleware('auth');
Route::post('/updateMenuForm', 'App\Http\Controllers\MenuController@updateMenuForm')->middleware('auth');

Route::get('/submenu', 'App\Http\Controllers\SubmenuController@index')->middleware('auth');
Route::get('/addSubmenu', 'App\Http\Controllers\SubmenuController@addSubmenu')->middleware('auth');
Route::post('/SubmenuRegisterForm', 'App\Http\Controllers\SubmenuController@SubmenuRegisterForm')->middleware('auth');
Route::post('/updateSubmenuForm', 'App\Http\Controllers\SubmenuController@updateSubmenuForm')->middleware('auth');


Route::get('/student-support', [StudentSupportController::class, 'index'])->middleware('auth');
Route::post('/student-support', [StudentSupportController::class, 'StudentSupport_store'])->middleware('auth');
Route::delete('/student-support/{id}', [StudentSupportController::class, 'StudentSupport_destroy'])->middleware('auth');
Route::get('/student-support-edit/{id}', [StudentSupportController::class, 'StudentSupport_edit'])->middleware('auth');
Route::post('/get_menu', [StudentSupportController::class, 'menu_to_submenu_change'])->middleware('auth');


Route::get('/video-gallery-admin', [VideoGalleryController::class, 'index'])->middleware('auth');
Route::post('/video-gallery-admin', [VideoGalleryController::class, 'video_gallery_store'])->middleware('auth');
Route::get('/video-gallery-edit/{id}', [VideoGalleryController::class, 'video_gallery_edit'])->middleware('auth');
Route::delete('/video-gallery-admin/{id}', [VideoGalleryController::class, 'video_gallery_destroy'])->middleware('auth');

// Country
Route::get('/country', [CourcesController::class, 'Country'])->middleware('auth');
Route::post('/country', [CourcesController::class, 'Country_Store'])->middleware('auth');
Route::delete('/country/{id}', [CourcesController::class, 'Country_Destroy'])->middleware('auth');
Route::get('/country/{id}', [CourcesController::class, 'Country_Edit'])->middleware('auth');

// Country
Route::get('/university', [CourcesController::class, 'University'])->middleware('auth');
Route::post('/university', [CourcesController::class, 'University_Store'])->middleware('auth');
Route::delete('/university/{id}', [CourcesController::class, 'University_Destroy'])->middleware('auth');
Route::get('/university/{id}', [CourcesController::class, 'University_Edit'])->middleware('auth');

// Location
Route::get('/location', [CourcesController::class, 'Location'])->middleware('auth');
Route::post('/location', [CourcesController::class, 'Location_Store'])->middleware('auth');
Route::delete('/location/{id}', [CourcesController::class, 'Location_Destroy'])->middleware('auth');
Route::get('/location/{id}', [CourcesController::class, 'Location_Edit'])->middleware('auth');

// QA
Route::get('/qa', [QaController::class, 'Question_answer'])->middleware('auth');
Route::post('/qa', [QaController::class, 'Question_answer_Store'])->middleware('auth');
Route::delete('/qa/{id}', [QaController::class, 'Question_answer_Destroy'])->middleware('auth');
Route::get('/qa/{id}', [QaController::class, 'Question_answer_Edit'])->middleware('auth');

// Course
Route::get('/course', [CourcesController::class, 'Course'])->middleware('auth');
Route::post('/course', [CourcesController::class, 'Course_Store'])->middleware('auth');
Route::delete('/course/{id}', [CourcesController::class, 'Course_Destroy'])->middleware('auth');
Route::get('/course/{id}', [CourcesController::class, 'Course_Edit'])->middleware('auth');
Route::get('/autocomplete', [CourcesController::class, 'autocomplete'])->name('autocomplete');


// Course-details
Route::get('/course-details', [CourcesController::class, 'Course_details'])->middleware('auth');
Route::get('/course-details-add', [CourcesController::class, 'Course_details_add'])->middleware('auth');
Route::post('/course-details', [CourcesController::class, 'Course_details_Store'])->middleware('auth');
Route::delete('/course-details/{id}', [CourcesController::class, 'Course_details_Destroy'])->middleware('auth');
Route::delete('/course-details/{id}', [CourcesController::class, 'Course_details_OnOff'])->middleware('auth');
Route::get('/course-details/{id}', [CourcesController::class, 'Course_details_Edit'])->middleware('auth');
Route::post('/get_location', [CourcesController::class, 'country_to_location_change'])->middleware('auth');

// Subject
Route::get('/subject', [CourcesController::class, 'Subject'])->middleware('auth');
Route::post('/subject', [CourcesController::class, 'Subject_Store'])->middleware('auth');
Route::delete('/subject/{id}', [CourcesController::class, 'Subject_Destroy'])->middleware('auth');
Route::get('/subject/{id}', [CourcesController::class, 'Subject_Edit'])->middleware('auth');


Route::get('/album', [AlbumController::class, 'index'])->middleware('auth');
Route::post('/album', [AlbumController::class, 'Album_Store'])->middleware('auth');
Route::delete('/album/{id}', [AlbumController::class, 'Album_Destroy'])->middleware('auth');
Route::get('/album/{id}', [AlbumController::class, 'Album_Edit'])->middleware('auth');

Route::get('/photo-gallery', [PhotoGalleryController::class, 'index'])->middleware('auth');
Route::post('/photo-gallery', [PhotoGalleryController::class, 'photo_gallery_store'])->middleware('auth');
Route::delete('/photo-gallery/{id}', [PhotoGalleryController::class, 'photo_gallery_destroy'])->middleware('auth');
Route::get('/photo-gallery-edit/{id}', [PhotoGalleryController::class, 'photo_gallery_edit'])->middleware('auth');

//location
Route::get('/sliders', [SliderController::class, 'index'])->middleware('auth');
Route::post('/slider', [SliderController::class, 'store'])->middleware('auth');
Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->middleware('auth');
Route::get('/slider/{id}', [SliderController::class, 'edit'])->middleware('auth');

Route::get('/news', [NewsController::class, 'index'])->middleware('auth');
Route::post('/news', [NewsController::class, 'news_store'])->middleware('auth');
Route::delete('/news/{id}', [NewsController::class, 'news_destroy'])->middleware('auth');
Route::get('/news-edit/{id}', [NewsController::class, 'news_edit'])->middleware('auth');


Route::get('/user-profile', 'App\Http\Controllers\ProfileController@index')->middleware('auth');
Route::get('/addProfile', 'App\Http\Controllers\ProfileController@addProfile')->middleware('auth');
Route::post('/ProfileRegisterForm', 'App\Http\Controllers\ProfileController@ProfileRegisterForm')->middleware('auth')->middleware('auth');
Route::post('/updateProfileForm', 'App\Http\Controllers\ProfileController@updateProfileForm')->middleware('auth')->middleware('auth');


Route::get('/agents-request', [ApplicationController::class, 'agent_request'])->middleware('auth');
Route::get('/contact-request', [ContactController::class, 'contact_request'])->middleware('auth');
Route::get('/subscribe-request', [SubscriptionController::class, 'subscribe_request'])->middleware('auth');
Route::get('/apply-course-request', [ApplyCourseController::class, 'apply_course_request'])->middleware('auth');



// Web Section
Route::post('/apply', [ApplicationController::class, 'store'])->name('applications.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/apply_course', [ApplyCourseController::class, 'store'])->name('apply_course.store');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');



Route::get('/', 'App\Http\Controllers\AppController@websites_dashboard');
Route::get('/student-support/{pagename}/{id}', 'App\Http\Controllers\AppController@page_views');

Route::get('student-support-details/{id}/{title}', function ($id) {
    
     $news = StudentSupport::find($id);

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
            
            $submenuid = StudentSupport::where('id', $id)->value('submenuid');
            $breadcrumb = SubMenu::find($submenuid)->name ?? 'No Support Details Fund!';
            
            $visit = StudentSupport::where('status', 1)
            ->orderBy('visit', 'desc')
            ->limit(5)
            ->get();
            
            if ($visit->isEmpty()) {
            $visit = [];
            }
     
     return view('web/student-support-details')
     ->with('pagename',$breadcrumb)
     ->with('submenu',$submenu)
     ->with('visit',$visit)
     ->with('news', $news);
});

Route::get('support-a-students', function (){
            
            $news = StudentSupport::where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
            $submenu = DB::table('submenu as sm')
            ->leftJoin('student_support as n', function ($join) {
                $join->on('sm.id', '=', 'n.submenuid')
                    ->where('n.status', 1);
            })
            ->select('sm.id', 'sm.name', 'sm.status', DB::raw('COUNT(n.id) as total_news')) 
            ->where('sm.status', 1)
            ->groupBy('sm.id', 'sm.name', 'sm.status') 
            ->inRandomOrder()
            ->limit(6)
            ->get();
            
            $visit = StudentSupport::where('status', 1)
            ->orderBy('visit', 'desc')
            ->limit(5)
            ->get();
            
            return view('web/student-support-list')
            ->with('news', $news)
            ->with('submenu',$submenu)
            ->with('visit',$visit);
    });

Route::get('photo-gallery/{id}/{title}', function ($id) {
    
    $photo_gallery = PhotoGallery::where('type', $id)
        ->orderBy('id', 'desc')
        ->get();
        
    return view('web/photo-gallery')
    ->with('photo_gallery',$photo_gallery);
});

Route::get('photo-gallery-album', function () {

    $album = Album::where('status',1)
    ->orderBy('id','DESC')
    ->get();
    if ($album->isEmpty()) {
            // Optionally, pass an empty array or a default message
            $album = [];
        }
    return view('web/photo-gallery-album')
    ->with('album',$album);
});
Route::get('video-gallery', function () {
    
    $video = VideoGallery::where('status',1)
    ->orderBy('id','DESC')
    ->get();
    if ($video->isEmpty()) {
            // Optionally, pass an empty array or a default message
            $video = [];
        }
    return view('web/video-gallery')
    ->with('video_gallery',$video);
    
});


Route::get('news/{id}/{title}', function ($id) {
    $news = News::find($id);
    $newsdetails = News::where('status',1)
    ->orderBy('id','DESC')
    ->get();
    $university = University::where('status',1)
    ->orderBy('id','DESC')
    ->get();
     return view('web/news')
    ->with('university', $university)
    ->with('getnews', $news)
     ->with('news', $newsdetails);
     
});

Route::get('news-and-blogs', function () {
    $news = News::where('status',1)
    ->orderBy('id','DESC')
    ->get();
    $university = University::where('status',1)
    ->orderBy('id','DESC')
    ->get();
     return view('web/news')
    ->with('university', $university)
     ->with('news', $news);
});


Route::get('about-us', function () {
    return view('web/about-us');
});
Route::get('story', function () {
    return view('web/story');
});
Route::get('story-details', function () {
    return view('web/story-details');
});
Route::get('visa', function () {
    return view('web/visa');
});
Route::get('visa-details', function () {
    return view('web/visa-details');
});
Route::get('blog', function () {
    return view('web/blog');
});
Route::get('blog', function () {
    return view('web/blog');
});
Route::get('blog-details', function () {
    return view('web/blog-details');
});
Route::get('visa-offers', function () {
    return view('web/visa-offers');
});

Route::get('gallery', function () {
        $album = Album::where('status',1)
    ->orderBy('id','DESC')
    ->get();
    if ($album->isEmpty()) {
            $album = [];
        }
    return view('web/gallery')
    ->with('gallery',$album);
});
Route::get('pricing', function () {
    return view('web/pricing');
});
Route::get('coaching', function () {
    return view('web/coaching');
});
Route::get('coaching-details', function () {
    return view('web/coaching-details');
});
Route::get('countrie', function () {
    return view('web/countrie');
});
Route::get('countrie-details', function () {
    return view('web/countrie-details');
});
Route::get('team', function () {
    return view('web/team');
});
Route::get('team-details', function () {
    return view('web/team-details');
});
Route::get('faq', function () {
    return view('web/faq');
});
Route::get('404', function () {
    return view('web/404');
});
Route::get('contact', function () {
    return view('web/contact');
});

Route::get('courses', function () {
    
    $country = Country::where('status', '1')
    ->orderBy('id', 'asc')
    ->get();
    if ($country->isEmpty()) {
        $country = [];
    }
    
    $university = University::where('status', '1')
    ->orderBy('id', 'desc')
    ->get();
    if ($university->isEmpty()) {
        $university = [];
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
    ->orderBy('id', 'desc')
    ->get();
    if ($course->isEmpty()) {
        $course = [];
    }
    
    $allMonths = [];

    $rows = CourseDetails::pluck('intake'); // only get intake field
    
    foreach ($rows as $jsonMonths) {
        $monthsArray = json_decode($jsonMonths, true); // decode JSON to array
        if (is_array($monthsArray)) {
            $allMonths = array_merge($allMonths, $monthsArray);
        }
    }
    // remove duplicates
    $uniqueMonths = array_values(array_unique($allMonths));
    // sort by calendar order
    $monthOrder = [
        'January','February','March','April','May','June',
        'July','August','September','October','November','December'
    ];
    usort($uniqueMonths, function($a, $b) use ($monthOrder) {
        return array_search($a, $monthOrder) - array_search($b, $monthOrder);
    });
    
    $courseDetails = DB::table('course_details as cd')
    ->leftJoin('country as c', 'cd.country_id', '=', 'c.id')
    ->leftJoin('location as l', 'cd.location_id', '=', 'l.id')
    ->leftJoin('university as u', 'cd.university_id', '=', 'u.id')
    ->leftJoin('subject as s', 'cd.subject_id', '=', 's.id')
    ->leftJoin('course as co', 'cd.course_id', '=', 'co.id')
    ->select(
        'cd.*',
        'c.name as country_name',
        'l.name as location_name',
        'u.name as university_name',
        'u.file_name as university_logo',
        's.name as subject_name',
        'co.name as course_name'
    )
    ->where('cd.status','=',1)
    ->orderBy('cd.id','desc')
    ->get();
    
    
    

    foreach($courseDetails as $key => $row){
        $row->intakes = json_decode($row->intake);
        $row->locations = json_decode($row->location_id);
        $row->delivery = json_decode($row->delivery_mode);
        $row->emptyroute = json_decode($row->entry_route);
        $courseDuration = json_decode($row->course_duration);
        $years = "";
        if(!empty($courseDuration)){
            foreach($courseDuration as $year){
            $text = $year > 1 ? 'Years ' : 'Year ';
            $years .= '<span class="location me-2">'.$year.' '.$text.'</span>';
            }
        }
        $row->durations = $years;
        $courseDetails[$key] = $row;
    }
    
    return view('web/courses')
    ->with('country', $country)
    ->with('university', $university)
    ->with('location', $location)
    ->with('subject', $subject)
    ->with('months', $uniqueMonths)
    ->with('course', $course)
    ->with('courseDetails', $courseDetails);
});

Route::get('university-partners', function () {
    $university = University::where('status', '1')
    ->orderBy('id', 'desc')
    ->get();
    if ($university->isEmpty()) {
        $university = [];
    }
    
    return view('web/university-partners')
    ->with('university',$university);
});

Route::get('agents', function () {
    return view('web/agents');
});

Route::get('complaint', function () {
        $complaints = Qa::where('status', '1')
        ->where('type', 'complaint')
        ->orderBy('id', 'desc')
        ->get();
        if ($complaints->isEmpty()) {
            $complaints = [];
        }
    
    return view('web/complaint')
    ->with('complaints',$complaints);
});

Route::get('legal', function () {
     $complaints = Qa::where('status', '1')
        ->where('type', 'legal')
        ->orderBy('id', 'desc')
        ->get();
        if ($complaints->isEmpty()) {
            $complaints = [];
        }
    
    return view('web/legal')
    ->with('legals',$complaints);
});

Route::get('safe-guarding', function () {
    
         $safe = Qa::where('status', '1')
         ->where('type', 'safe-guarding')
        ->orderBy('id', 'desc')
        ->get();
        if ($safe->isEmpty()) {
            $safe = [];
        }
    return view('web/safe-guarding')
    ->with('sgs',$safe);
    });

Route::get('data-protection', function () {
    
    $dps = Qa::where('status', '1')
        ->where('type', 'data-protection')
        ->orderBy('id', 'desc')
        ->get();
        if ($dps->isEmpty()) {
            $dps = [];
        }
    return view('web/data-protection')
    ->with('dps',$dps);
    });





