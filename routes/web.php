<?php

use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layout.layout');
});
Route::get('loginpage', function () {
    return view('login');
});
Route::get('forgetpage', function () {
    return view('forget');
});
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/tasbih', function () {
    return view('tasbih');
});
Route::get('/hadith', function () {
    return view('hadith');
});
Route::get('/doa', function () {
    return view('doa');
});
Route::get('/ayah', function () {
    return view('ayah');
});
Route::get('/naat', function () {
    return view('naat');
});
Route::get('/nohy', function () {
    return view('nohy');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/suggestion', function () {
    return view('suggestion');
});
Route::get('/queries', function () {
    return view('queries');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/notification', function () {
    return view('notification');
});

