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

/* Route::get('/my-name', function() {
    echo 'Ashwani'; exit;
}); */

/* Route::get('/user-list', function () {
    return view('userList');
}); */

Route::get('/user-list', 'UserController@UserList')->name('list');

/* Route::get('/user/{id?}', function ($id = 0) {
    if($id == 0)
        return view('page404');
    echo 'ID: '.$id;
}); */

Route::get('/user/{id?}','UserController@UserProfile');

Route::get('/users', 'UserController@Users');

Route::resource('home/employees','EmployeeController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('404','ErrorHandlerController@errorCode404')->name('404');

Route::get('500','ErrorHandlerController@errorCode500');

Route::get('error','ErrorHandlerController@errorCodeAny');