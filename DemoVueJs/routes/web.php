<?php 

Route::get('/', function () {
    return view('pages/trangchu');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
