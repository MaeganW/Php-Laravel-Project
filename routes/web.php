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
})->name('welcome');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/name', function () {
    return view('name');
})->name('name');

Route::get('/hello_world', function () {
    return 'hello world';
});

Route::get('role',[
    'middleware' => 'Role:Supreme Mugwump',
    'uses' => 'TestController@index',
 ]);


// =================================

// example required params
// Route::get('ID/{id}',function($id) {
//     echo 'ID: '.$id;
//  });

// example optional params
//  Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

// example named route
Route::get('user/profile', 'UserController@showProfile')->name('profile');