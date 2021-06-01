<?php

Route::group(['namespace' => 'Nextbits\Demo\Http\Controllers'], function(){
//    Route::get('login', function(){
//        return "It Works";
//    });

    Route::get('/dashboard', "DemoController@dashboard");
    Route::get('/email-by-listner', "DemoController@emailByListner");
    Route::get('/email-by-queue-listner', "DemoController@emailByQuqueListner");

    //Route::get('/dashboard', "DemoController@dashboard")->name('dashboard');
});