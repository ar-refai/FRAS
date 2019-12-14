<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function (){
    return view('test_view');
});

Route::get('/courses', function (){
    return view('courses_view');
});

Route::get('/admin/main', function (){
    return view('admin_view');
});

Route::prefix('Admin')->group(function(){
    Route::prefix('Course')->group(function(){
        Route::get('Add','Admin\Course\course_cont@add');
        Route::post('Add','Admin\Course\course_cont@add');

        Route::get('Update/{id}','Admin\Course\course_cont@update');
        Route::post('Update/{id}','Admin\Course\course_cont@update');
    });
});

