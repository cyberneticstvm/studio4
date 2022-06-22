<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/projects/interior/', function () {
    return view('projects.interior');
});

Route::get('/projects/interior/cafe/', function () {
    return view('projects.interior.cafe');
});

Route::get('/projects/interior/hospital/', function () {
    return view('projects.interior.hospital');
});

Route::get('/projects/interior/resort-and-spa/', function () {
    return view('projects.interior.ras');
});

Route::get('/projects/interior/hotel-and-residence-dubai/', function () {
    return view('projects.interior.hard');
});

Route::get('/projects/interior/hotel-and-residence-sharjah/', function () {
    return view('projects.interior.hars');
});
