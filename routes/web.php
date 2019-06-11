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

Route::get('/', function () {
    return view('welcome');
});


/****************************************************************
 * lyrics routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Lyrics'],function(){

});

/****************************************************************
 * Artist  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Artist'],function(){

});

/****************************************************************
 * User  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'User'],function(){

});




/****************************************************************
 * Admin  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Admin'],function(){

    Route::get('/edit-banner/{id}', 'PagesController@editBanner')->name('edit-banner');
});

/****************************************************************
 * Super Admin routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'SuperAdmin'],function(){

});

/****************************************************************
 * Forum  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Forum'],function(){

});

/****************************************************************
 * Translation  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Translation'],function(){

});

/****************************************************************
 * Track  routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Track'],function(){

});
