<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/home', function () {
    return view('welcome');
});