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
// 
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'AuthController@index')->name('home');
// Route::get('/login', 'AuthController@getLogin')->name('get_login');
Route::post('/login', 'AuthController@postLogin')->name('post_login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('register', 'AdminController@create')->name('register_user');

Route::group(['prefix' => 'personal'], function () {
    Route::get('/', 'UserController@index')->name('user_dashboard');
    Route::get('/profile', 'UserController@profile')->name('user_profile');
    Route::post('/update/profile', 'UserController@updateProfile')->name('update_profile');
    Route::get('/express/interest', 'ExpressionOfInterestController@create')->name('express_interest');
    Route::post('/express/interest', 'ExpressionOfInterestController@store')->name('save_express_interest');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin_dashboard');
    Route::get('/all/users', 'AdminController@getUsers')->name('all_users');
    Route::post('/edit/user/{id}', 'AdminController@editUser')->name('update_user');
    Route::get('/delete/user/{id}', 'AdminController@deleteUser')->name('delete_user');
    Route::get('/deactivate/user/{id}', 'AdminController@deactivateUser')->name('deactivate_user');
    Route::get('/activate/user/{id}', 'AdminController@activateUser')->name('activate_user');
});
