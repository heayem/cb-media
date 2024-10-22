<?php

use Inertia\Inertia;
use App\Mail\CbMediaMail;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return Inertia::render('publicSite/homePage/home_page');
});
/**
* Display page the video service.
*/
Route::get('/video-service', function () {
    return Inertia::render('publicSite/videoServicePage/video_service_page');
});
Route::get('/video-service/event', function () {
    return Inertia::render('publicSite/videoServicePage/video_event');
});
Route::get('/video-service/commercial', function () {
    return Inertia::render('publicSite/videoServicePage/video_commercial');
});
Route::get('/video-service/livestream', function () {
    return Inertia::render('publicSite/videoServicePage/video_live_stream');
});
Route::get('/video-service/shortfilm', function () {
    return Inertia::render('publicSite/videoServicePage/video_short_film');
});
Route::get('/video-service/travel', function () {
    return Inertia::render('publicSite/videoServicePage/video_travel');
});
Route::get('/video-service/documentary', function () {
    return Inertia::render('publicSite/videoServicePage/video_documentary');
});
/**
* Display the page photo service.
*/
Route::get('/photo-service', function () {
    return Inertia::render('publicSite/photoServicePage/photo_service_page');
});
Route::get('/photo-service/event', function () {
    return Inertia::render('publicSite/photoServicePage/photo_event');
});
Route::get('/photo-service/commercial', function () {
    return Inertia::render('publicSite/photoServicePage/photo_commercial');
});
Route::get('/photo-service/documentary', function () {
    return Inertia::render('publicSite/photoServicePage/photo_documentary');
});
Route::get('/photo-service/studio', function () {
    return Inertia::render('publicSite/photoServicePage/photo_studio');
});
Route::get('/photo-service/travel', function () {
    return Inertia::render('publicSite/photoServicePage/photo_travel');
});
Route::get('/photo-service/product', function () {
    return Inertia::render('publicSite/photoServicePage/photo_product');
});
/**
* Display the page social_media_marketing .
*/
Route::get('/social-media-marketing', function () {
    return Inertia::render('publicSite/socialMediaMarketingPage/social_media_marketing_page');
});
/**
* Display the page web_development .
*/
Route::get('/web-development', function () {
    return Inertia::render('publicSite/webDevelopmentPage/web_development_page');
});
/**
* Display the page Contacts .
*/
Route::get('/contact', function () {
    return Inertia::render('publicSite/contactPage/contact_page');
});
/**
* Display the page AboutUs .
*/
Route::get('/about-us', function () {
    return Inertia::render('publicSite/aboutUsPage/about_us_page');
});
/**
* Display the page AboutUs .
*/
Route::get('/cb-media-team', function () {
    return Inertia::render('publicSite/team/team_page');
});

Route::post('/sendEmail', [ContactController::class, 'sendEmail'])->name('/sendEmail');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

