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
    return view('welcome');
});

Route::get('/myhome', function () {
    return view('frontendPages.homePage.homeContent');
});

Route::get('/app', function () {
    return view('frontendPages.app');
});

Route::get('/Events', function () {
    return view('frontendPages.completedEvents');
});

Route::get('/courses', function () {
    return view('frontendPages.Courses');
});

Route::get('/facilities', function () {
    return view('frontendPages.facilities');
});

Route::get('/intro', function () {
    return view('frontendPages.Intro');
});

Route::get('/faculties', function () {
    return view('frontendPages.Facultyinfo');
});
Route::get('/Ex_dg', function () {
    return view('frontendPages.Former-DG');
});
Route::get('/mission', function () {
    return view('frontendPages.Mission&Vission');
});
Route::get('/Stat_training', function () {
    return view('frontendPages.Static_Training');
});
Route::get('/Training_Cal', function () {
    return view('frontendPages.TrainningCalender');
});
