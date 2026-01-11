<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});