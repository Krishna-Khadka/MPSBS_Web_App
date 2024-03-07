<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\NewsBlogsController;
use App\Http\Controllers\frontend\PostDetailController;
use App\Http\Controllers\frontend\NoticesController;
use App\Http\Controllers\frontend\EventsController;
use App\Http\Controllers\frontend\EventDetailsController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AdmissionController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ImageGalleryController;
// use App\Http\Controllers\frontend\GalleryController;

use App\Http\Controllers\frontend\MissionVisionController;
use App\Http\Controllers\frontend\NoticeDetailsController;
use App\Http\Controllers\frontend\ProgramsController;
use App\Http\Controllers\frontend\SiteArchiveController;
use App\Http\Controllers\frontend\MessageSiteController;
use App\Http\Controllers\frontend\SiteGalleryController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\frontend\TeamsController;

use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

// frontend routes goes here
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/News-Blog',[NewsBlogsController::class,'index'])->name('news-blogs');
Route::get('/Post-Details/{slug}',[PostDetailController::class, 'index'])->name('post_detail');
Route::get('/Notice',[NoticesController::class, 'index'])->name('site.notices');
Route::get('/OurEvents',[EventsController::class, 'index'])->name('site.events');
Route::get('/Event/Details/{slug}',[EventDetailsController::class, 'index'])->name('site.event.details');
Route::get('/About',[AboutController::class,'index'])->name('site.about');
Route::get('/Mission-Vision',[MissionVisionController::class, 'index'])->name('site.mission.Vision');
Route::get('/Program',[ProgramsController::class, 'index'])->name('site.programs');
Route::get('/Admission', [AdmissionController::class, 'index'])->name('site.admission');

// contact route site
Route::get('/Contact',[ContactController::class, 'index'])->name('site.contact');
Route::post('/contact/send',[ContactController::class,'saveMessage'])->name('save.contact');


Route::get('/Teams',[TeamsController::class, 'index'])->name('site.teams');
Route::get('/Notice/Details/{slug}',[NoticeDetailsController::class, 'index'])->name('site.notice.details');
Route::get('/School-Gallery',[SiteGalleryController::class, 'index'])->name('show.gallery');
Route::get('MPSBS/ImageGallery/{id}',[ImageGalleryController::class,'index'])->name('show.image.gallery');

// archive routes
Route::get('/Archive',[SiteArchiveController::class, 'index'])->name('site.archive');
Route::get('Archive/Deltails/{slug}',[SiteArchiveController::class, 'archiveDetail'])->name('site.archive.deltails');
Route::get('/Message',[MessageSiteController::class, 'index'])->name('site.message');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'AuthLogin']);
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::get('forget-password',[AuthController::class, 'forget_password'])->name('forget');
Route::post('forget-password',[AuthController::class, 'forget'])->name('forget-pwd');


// Route::get('/admin-list',function(){
//     return view('Dashboard.admin.admin-list');
// });
// Route::get('/Blogs',function(){
//     return view('Dashboard.admin.Blog.blog');
// });

// Route::get('/Blog/Add',function(){
//     return view('Dashboard.admin.Blog.add_blog');
// });

Route::post('upload/',[BlogController::class, 'upload'])->name('ckeditor.upload');

// group for middleware routes
  Route::group(['middleware' => 'admin'],function(){
    Route::get('/user',[AdminController::class, 'user'])->name('user');
    Route::get('/user/show',[AdminController::class, 'ShowUser'])->name('show.user');
    Route::get('/admin',[DashboardController::class, 'dashboard']);
    Route::post('/user/add',[AdminController::class,'addUser'])->name('add.user');

    // edit routes
    Route::get('/edit',[AdminController::class, 'edit'])->name('edit.user');
    Route::post('/update',[AdminController::class, 'UpdateUser'])->name('update.user');
    Route::post('/delete',[AdminController::class, 'DeleteUser'])->name('delete.user');

    // Post and News routes
    Route::get('/Posts',[PostController::class, 'showPosts'])->name('show.posts');
    Route::post('Post/Save', [PostController::class, 'savePost'])->name('save.post');
    Route::get('/Post/Show',[PostController::class, 'posts'])->name('display.post');
    Route::get('Post/Edit', [PostController::class, 'edit'])->name('edit.post');
    Route::post('Post/update', [PostController::class, 'updatePost'])->name('update.post');
    Route::post('Post/Delete', [PostController::class, 'DeletePost'])->name('delete.post');

    // routes for post categories
    Route::get('/PostCategory', [PostCategoryController::class, 'showPostCategory'])->name('postCategory');
    Route::post('PostCategory/Create', [PostCategoryController::class, 'createCategory'])->name('create.postCategory');
    Route::get('PostCategory/Show', [PostCategoryController::class, 'showCategory'])->name('show.postCategory');
    Route::post('PostCategory/Delete', [PostCategoryController::class, 'deleteCategory'])->name('delete.postCategory');
    Route::get('PostCategory/Edit', [PostCategoryController::class, 'editCategory'])->name('edit.postCategory');
    Route::post('PostCategory/Update', [PostCategoryController::class, 'updateCategory'])->name('update.category');


    // events related routes
    Route::get('/Events',[EventController::class, 'events'])->name('all.events');
    Route::post('Event/Create',[EventController::class, 'createEvent'])->name('add.event');
    Route::get('Event/Display',[EventController::class, 'DisplayEvent'])->name('display.event');
    Route::get('Event/Edit',[EventController::class, 'edit'])->name('edit.event');
    Route::post('Event/Update',[EventController::class, 'updateEvent'])->name('update.event');
    Route::post('Event/Delete', [EventController::class, 'DeleteEvent'])->name('delete.event');

    // event Categories
    Route::post('/EventCategory',[EventCategoryController::class, 'saveEventCategories'])->name('event.category');
    Route::get('EventCategory/Display',[EventCategoryController::class, 'DisplayCategory'])->name('display.eventCategory');
    Route::post('EventCategory/Delete', [EventCategoryController::class, 'deleteEventCategory'])->name('delete.eventCategory');
    Route::get('EventCategory/Edit',[EventCategoryController::class, 'editEventCategory'])->name('edit.eventCategory');
    Route::post('EventCategory/Update',[EventCategoryController::class, 'UpdateEventCategory'])->name('update.eventCategory');



    // notices routes
    Route::get('/Notices',[NoticeController::class, 'notices'])->name('all.notices');
    Route::post('Notice/Create',[NoticeController::class, 'createNotice'])->name('add.notice');
    Route::get('Notice/Display',[NoticeController::class, 'DisplayNotice'])->name('display.notices');
    Route::get('Notice/Edit',[NoticeController::class, 'edit'])->name('edit.notice');
    Route::post('Notice/Update',[NoticeController::class, 'updateNotice'])->name('update.notice');
    Route::post('Notice/Delete', [NoticeController::class, 'DeleteNotice'])->name('delete.notice');

    // Teams Routes createTeam
    Route::get('/TeamMember',[OurTeamController::class, 'index'])->name('all.teams');
    Route::post('TeamMember/Create',[OurTeamController::class, 'createTeam'])->name('add.team');
    Route::get('TeamMember/Display',[OurTeamController::class, 'DisplayTeam'])->name('display.teams');
    Route::get('TeamMember/Edit',[OurTeamController::class, 'edit'])->name('edit.teams');
    Route::post('TeamMember/Update',[OurTeamController::class, 'updateTeam'])->name('update.team');
    Route::post('TeamMember/Delete', [OurTeamController::class, 'DeleteTeam'])->name('delete.team');

    // school profile routes
    Route::get('/SchoolProfile',[SchoolProfileController::class, 'index'])->name('school.profile');
    Route::post('/SchoolProfile/school-info',[SchoolProfileController::class, 'SchooInfo'])->name('school-info.update');
    Route::post('/SchoolProfile/contact-info',[SchoolProfileController::class, 'ContactInfo'])->name('contact-info.update');

    // gallery routes display.image.gallery
    Route::get('Gallery/Display',[GalleryController::class, 'DisplayGallery'])->name('display.image.gallery');
    Route::get('/gallery',[GalleryCategoryController::class, 'index'])->name('gallery.category');
    Route::post('GalleryCateogry/Create',[GalleryCategoryController::class, 'GalleryCategory'])->name('add.gallery.category');
    Route::get('GalleryCateogry/Display',[GalleryCategoryController::class, 'DisplayCategory'])->name('display.gallery.category');
    Route::post('Gallery/Create',[GalleryController::class, 'Store'])->name('create.gallery');
    Route::post('Gallery/Delete',[GalleryController::class, 'DeleteGallery'])->name('delete.gallery');

    // archive routes
    Route::get('/archive',[ArchiveController::class,'index'])->name('mpsbs.archive');
    Route::post('Archive/Create',[ArchiveController::class, 'ArchiveStore'])->name('add.archive');
    Route::get('Archive/Display',[ArchiveController::class, 'DisplayArchive'])->name('display.archive');

    // contact Route
    Route::get('/contact',[MessageController::class,'index'])->name('message');
    Route::get('/message',[MessageController::class,'DisplayMessage'])->name('display.messages');
    Route::post('/delete/message',[MessageController::class, 'DeleteMessage'])->name('delete.message');

});

Route::group(['middleware' => 'teacher'],function(){
    Route::get('/teacher',[DashboardController::class, 'dashboard']);
    // Route::get('/teacher',function(){
    //     return view('Dashboard.admin');
    // });
});

Route::group(['middleware' => 'student'],function(){
    Route::get('/student',[DashboardController::class, 'dashboard']);
    // Route::get('/student',function(){
    //     return view('Dashboard.admin');
    // });
});

Route::group(['middleware' => 'parent'],function(){
    Route::get('/parent',[DashboardController::class, 'dashboard']);
    // Route::get('/parent',function(){
    //     return view('Dashboard.admin');
    // });
});
