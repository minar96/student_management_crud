<?php


// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/main', 'mainController@main');
// Route::get('/index', 'mainController@index');



Route::get('/index', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit');




Route::post('/store', 'StudentController@store')->name('store');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::post('/delete/{id}', 'StudentController@delete')->name('delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
