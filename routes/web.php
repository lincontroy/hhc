<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/whatwedo', function () {
    return view('whatwedo');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/correspondence', function () {
    return view('correspondence');
});

Route::get('/gallery',function(){
    return view('gallery');
});

Route::get('/donate',function(){
    return view('donate');
});

Route::get('/contact', function () {
    return view('contact');
});