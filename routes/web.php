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

// @index refers to the index function I declared in the test controller
// all this method does is echo "Test Controller"
// The RoleMiddleware is indicated with the "Role:" - here we are passing the value
// of "Supreme Mugwump" which it is outputing on the page right before
// the test controller
Route::get('role',[
    'middleware' => 'Role:Supreme Mugwump',
    'uses' => 'TestController@index',
]);

// Route::get('user/profile', 'UserController@showProfile')->name('profile');

// auth middleware is assigned in the user controller's constructor
// auth middleware is named auth in the kernel.php file - file is actually authenticate.php
// Route::get('profile', [
//     'middleware' => 'auth',
//     'uses' => 'UserController@showProfile'
// ]);


// =================================

// example required params
// Route::get('ID/{id}',function($id) {
//     echo 'ID: '.$id;
//  });

// example optional params
//  Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

// example named route
// Route::get('user/profile', 'UserController@showProfile')->name('profile');