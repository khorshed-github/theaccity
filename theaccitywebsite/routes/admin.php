<?php

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
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ApplyCourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| These routes are loaded with the 'web' and 'auth' middleware.
| All admin routes are prefixed with '/admin'
|
*/

// Admin Dashboard
Route::get('/dashboard', 'App\Http\Controllers\AppController@admin_dashboard')->name('admin.dashboard');

// Menu Management
Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu.index');
Route::get('/menu/add', [MenuController::class, 'addMenuForm'])->name('admin.menu.add');
Route::post('/menu/store', [MenuController::class, 'MenuRegisterForm'])->name('admin.menu.store');
Route::post('/menu/update', [MenuController::class, 'updateMenuForm'])->name('admin.menu.update');

// Submenu Management
Route::get('/submenu', [SubmenuController::class, 'index'])->name('admin.submenu.index');
Route::get('/submenu/add', [SubmenuController::class, 'addSubmenu'])->name('admin.submenu.add');
Route::post('/submenu/store', [SubmenuController::class, 'SubmenuRegisterForm'])->name('admin.submenu.store');
Route::post('/submenu/update', [SubmenuController::class, 'updateSubmenuForm'])->name('admin.submenu.update');

// Student Support
Route::get('/student-support', [StudentSupportController::class, 'index'])->name('admin.student-support.index');
Route::post('/student-support', [StudentSupportController::class, 'StudentSupport_store'])->name('admin.student-support.store');
Route::delete('/student-support/{id}', [StudentSupportController::class, 'StudentSupport_destroy'])->name('admin.student-support.destroy');
Route::get('/student-support/edit/{id}', [StudentSupportController::class, 'StudentSupport_edit'])->name('admin.student-support.edit');
Route::post('/student-support/get-menu', [StudentSupportController::class, 'menu_to_submenu_change'])->name('admin.student-support.get-menu');

// Video Gallery
Route::get('/video-gallery', [VideoGalleryController::class, 'index'])->name('admin.video-gallery.index');
Route::post('/video-gallery', [VideoGalleryController::class, 'video_gallery_store'])->name('admin.video-gallery.store');
Route::get('/video-gallery/edit/{id}', [VideoGalleryController::class, 'video_gallery_edit'])->name('admin.video-gallery.edit');
Route::delete('/video-gallery/{id}', [VideoGalleryController::class, 'video_gallery_destroy'])->name('admin.video-gallery.destroy');

// Country Management
Route::get('/country', [CourcesController::class, 'Country'])->name('admin.country.index');
Route::post('/country', [CourcesController::class, 'Country_Store'])->name('admin.country.store');
Route::delete('/country/{id}', [CourcesController::class, 'Country_Destroy'])->name('admin.country.destroy');
Route::get('/country/{id}', [CourcesController::class, 'Country_Edit'])->name('admin.country.edit');

// University Management
Route::get('/university', [CourcesController::class, 'University'])->name('admin.university.index');
Route::post('/university', [CourcesController::class, 'University_Store'])->name('admin.university.store');
Route::delete('/university/{id}', [CourcesController::class, 'University_Destroy'])->name('admin.university.destroy');
Route::get('/university/{id}', [CourcesController::class, 'University_Edit'])->name('admin.university.edit');

// Location Management
Route::get('/location', [CourcesController::class, 'Location'])->name('admin.location.index');
Route::post('/location', [CourcesController::class, 'Location_Store'])->name('admin.location.store');
Route::delete('/location/{id}', [CourcesController::class, 'Location_Destroy'])->name('admin.location.destroy');
Route::get('/location/{id}', [CourcesController::class, 'Location_Edit'])->name('admin.location.edit');

// Q&A Management
Route::get('/qa', [QaController::class, 'Question_answer'])->name('admin.qa.index');
Route::post('/qa', [QaController::class, 'Question_answer_Store'])->name('admin.qa.store');
Route::delete('/qa/{id}', [QaController::class, 'Question_answer_Destroy'])->name('admin.qa.destroy');
Route::get('/qa/{id}', [QaController::class, 'Question_answer_Edit'])->name('admin.qa.edit');

// Course Management
Route::get('/course', [CourcesController::class, 'Course'])->name('admin.course.index');
Route::post('/course', [CourcesController::class, 'Course_Store'])->name('admin.course.store');
Route::delete('/course/{id}', [CourcesController::class, 'Course_Destroy'])->name('admin.course.destroy');
Route::get('/course/{id}', [CourcesController::class, 'Course_Edit'])->name('admin.course.edit');
Route::get('/autocomplete', [CourcesController::class, 'autocomplete'])->name('admin.autocomplete');

// Course Details Management
Route::get('/course-details', [CourcesController::class, 'Course_details'])->name('admin.course-details.index');
Route::get('/course-details/add', [CourcesController::class, 'Course_details_add'])->name('admin.course-details.add');
Route::post('/course-details', [CourcesController::class, 'Course_details_Store'])->name('admin.course-details.store');
Route::delete('/course-details/{id}', [CourcesController::class, 'Course_details_Destroy'])->name('admin.course-details.destroy');
Route::get('/course-details/toggle/{id}', [CourcesController::class, 'Course_details_OnOff'])->name('admin.course-details.toggle');
Route::get('/course-details/{id}', [CourcesController::class, 'Course_details_Edit'])->name('admin.course-details.edit');
Route::post('/course-details/get-location', [CourcesController::class, 'country_to_location_change'])->name('admin.course-details.get-location');

// Subject Management
Route::get('/subject', [CourcesController::class, 'Subject'])->name('admin.subject.index');
Route::post('/subject', [CourcesController::class, 'Subject_Store'])->name('admin.subject.store');
Route::delete('/subject/{id}', [CourcesController::class, 'Subject_Destroy'])->name('admin.subject.destroy');
Route::get('/subject/{id}', [CourcesController::class, 'Subject_Edit'])->name('admin.subject.edit');

// Album Management
Route::get('/album', [AlbumController::class, 'index'])->name('admin.album.index');
Route::post('/album', [AlbumController::class, 'Album_Store'])->name('admin.album.store');
Route::delete('/album/{id}', [AlbumController::class, 'Album_Destroy'])->name('admin.album.destroy');
Route::get('/album/{id}', [AlbumController::class, 'Album_Edit'])->name('admin.album.edit');

// Photo Gallery Management
Route::get('/photo-gallery', [PhotoGalleryController::class, 'index'])->name('admin.photo-gallery.index');
Route::post('/photo-gallery', [PhotoGalleryController::class, 'photo_gallery_store'])->name('admin.photo-gallery.store');
Route::delete('/photo-gallery/{id}', [PhotoGalleryController::class, 'photo_gallery_destroy'])->name('admin.photo-gallery.destroy');
Route::get('/photo-gallery/edit/{id}', [PhotoGalleryController::class, 'photo_gallery_edit'])->name('admin.photo-gallery.edit');

// Slider Management
Route::get('/sliders', [SliderController::class, 'index'])->name('admin.sliders.index');
Route::post('/slider', [SliderController::class, 'store'])->name('admin.slider.store');
Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');
Route::get('/slider/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');

// News Management
Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
Route::post('/news', [NewsController::class, 'news_store'])->name('admin.news.store');
Route::delete('/news/{id}', [NewsController::class, 'news_destroy'])->name('admin.news.destroy');
Route::get('/news/edit/{id}', [NewsController::class, 'news_edit'])->name('admin.news.edit');

// User Profile Management
Route::get('/user-profile', [ProfileController::class, 'index'])->name('admin.user-profile.index');
Route::get('/user-profile/add', [ProfileController::class, 'addProfile'])->name('admin.user-profile.add');
Route::post('/user-profile/store', [ProfileController::class, 'ProfileRegisterForm'])->name('admin.user-profile.store');
Route::post('/user-profile/update', [ProfileController::class, 'updateProfileForm'])->name('admin.user-profile.update');

// Request Management
Route::get('/agents-request', [ApplicationController::class, 'agent_request'])->name('admin.agents-request');
Route::get('/contact-request', [ContactController::class, 'contact_request'])->name('admin.contact-request');
Route::get('/subscribe-request', [SubscriptionController::class, 'subscribe_request'])->name('admin.subscribe-request');
Route::get('/apply-course-request', [ApplyCourseController::class, 'apply_course_request'])->name('admin.apply-course-request');

// Settings Management
Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('admin.settings.index');
Route::post('/settings/update', [App\Http\Controllers\SettingsController::class, 'update'])->name('admin.settings.update');
Route::get('/settings/group/{group}', [App\Http\Controllers\SettingsController::class, 'getByGroup'])->name('admin.settings.group');

// Homepage Statistics Management
Route::get('/statistics', [App\Http\Controllers\HomepageStatisticController::class, 'index'])->name('admin.statistics.index');
Route::get('/statistics/add', [App\Http\Controllers\HomepageStatisticController::class, 'create'])->name('admin.statistics.add');
Route::post('/statistics/store', [App\Http\Controllers\HomepageStatisticController::class, 'store'])->name('admin.statistics.store');
Route::get('/statistics/edit/{id}', [App\Http\Controllers\HomepageStatisticController::class, 'edit'])->name('admin.statistics.edit');
Route::post('/statistics/update/{id}', [App\Http\Controllers\HomepageStatisticController::class, 'update'])->name('admin.statistics.update');
Route::delete('/statistics/{id}', [App\Http\Controllers\HomepageStatisticController::class, 'destroy'])->name('admin.statistics.destroy');

// Student Management
Route::get('/students', [App\Http\Controllers\AdminStudentController::class, 'index'])->name('admin.students.index');
Route::delete('/students/{id}', [App\Http\Controllers\AdminStudentController::class, 'destroy'])->name('admin.students.destroy');
Route::post('/students/comment/{id}', [App\Http\Controllers\AdminStudentController::class, 'updateComment'])->name('admin.students.comment.update');
