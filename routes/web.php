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
    // this is grouping of courses
    Route::prefix('Course')->group(function(){
        Route::get('/','Admin\Course\course_cont@index')->name('Course.Index');

        Route::get('Add','Admin\Course\course_cont@add')->name('Course.Add');;
        Route::post('Add','Admin\Course\course_cont@add')->name('Course.Add');;

        Route::get('Update/{id}','Admin\Course\course_cont@update')->name('Course.Update');;
        Route::post('Update/{id}','Admin\Course\course_cont@update')->name('Course.Update');;

        Route::get('Delete/{id}','Admin\Course\course_cont@delete')->name('Course.Delete');;
        Route::post('Delete/{id}','Admin\Course\course_cont@delete')->name('Course.Delete');;
    });
    // this is grouping of images
    Route::prefix('Image')->group(function(){
        Route::get('/','Admin\Image\Image_cont@index')->name('Image.Index');

        Route::get('Add','Admin\Image\Image_cont@add')->name('Image.Add');;
        Route::post('Add','Admin\Image\Image_cont@add')->name('Image.Add');;

        Route::get('Delete/{id}','Admin\Image\Image_cont@delete')->name('Image.Delete');;
        Route::post('Delete/{id}','Admin\Image\Image_cont@delete')->name('Image.Delete');;

    });

});

