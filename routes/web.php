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

// For Backend
Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');
Route::get('staffinfos/info_detail/{id}', 'BackendController@info_detail')->name('info_detailpage');
Route::resource('departments', 'DepartmentController');
Route::resource('staffinfos', 'StaffinfoController');
Route::resource('leaves', 'LeaveController');
Route::resource('leave_requests', 'LeaverequestController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
