<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/campus', function () {
    return view('campus');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/course/chc33021', function () {
    return view('course-detail-chc33021');
});

Route::get('/contact', function () {
    return view('contact');
});