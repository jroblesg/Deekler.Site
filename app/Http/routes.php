<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/crm', function () {
        return view('contact_crm');
    });
    
    Route::get('/cms', function () {
        return view('cms_content');
    });
    
      Route::get('/ecommerce', function () {
        return view('ecommerce_contact');
    });
    
     Route::get('/mobile_app', function () {
        return view('mobile_app');
    });
    
});

Route::group(['prefix'=>'contact'],function(){

    Route::resource('contact','ContactUsController');
});
