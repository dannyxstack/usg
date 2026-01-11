<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/index', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/campus', function () {
    return view('campus', ['title' => 'Campus']);
});
Route::get('/whyus', function () {
    return view('whyus', ['title' => 'Why Us'] );
});
Route::get('/whyus.html', function () {
    return view('whyus');
});

Route::get('/allcourses', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{code}', [CourseController::class, 'detail'])->name('course.detail');

Route::get('/course/chc33021', function () {
    return view('course-detail-chc33021');
});

// Route::get('/contact', function () {
//     return view('contact', ['title' => 'Contact Us']);
// });
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/debug-csrf', function() {
    return response()->json([
        'csrf_token' => csrf_token(),
        'session_id' => session()->getId(),
        'session_driver' => config('session.driver'),
        'session_status' => session()->isStarted() ? 'started' : 'not started',
        'cookie_domain' => config('session.domain'),
        'app_url' => config('app.url'),
    ]);
});

