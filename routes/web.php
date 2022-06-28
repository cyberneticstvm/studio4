<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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

Route::get('/send-mail/', [EmailController::class, 'index']);



Route::get('/projects/architectural/', function () {
    return view('projects.architecture.index');
});
Route::get('/projects/architecture/gallery/', function () {
    return view('projects.architecture.gallery');
});


Route::get('/projects/landscape/', function () {
    return view('projects.landscape.index');
});
Route::get('/projects/landscape/gallery/', function () {
    return view('projects.landscape.gallery');
});



Route::get('/projects/fitout/', function () {
    return view('projects.fitout.index');
});
Route::get('/projects/fitout/gallery/', function () {
    return view('projects.fitout.gallery');
});


Route::get('/projects/interior/', function () {
    return view('projects.interior');
});
Route::get('/projects/interior/cafe/', function () {
    return view('projects.interior.cafe');
});
Route::get('/projects/interior/villa/', function () {
    return view('projects.interior.villa');
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
