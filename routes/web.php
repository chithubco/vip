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
Route::get('/login', 'AuthController@getLogin')->name('get_login');
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
    Route::post('/edit/interest/{id}', 'ExpressionOfInterestController@edit')->name('update_interest');
    Route::get('/registration', 'RegistrationController@index')->name('registration');
    Route::post('/registration', 'RegistrationController@store')->name('save_registration');
    Route::get('/settings', 'UserController@settings')->name('settings');
    Route::post('/save/password', 'UserController@changePassword')->name('save_settings');
    Route::get('download', 'UserController@downloadPdf')->name('download_pdf');
    Route::get('/registration/terms', 'UserController@registrationTerms')->name('registration_terms');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin_dashboard');
    Route::get('/all/users', 'AdminController@getUsers')->name('all_users');
    Route::post('/edit/user/{id}', 'AdminController@editUser')->name('update_user');
    Route::get('/delete/user/{id}', 'AdminController@deleteUser')->name('delete_user');
    Route::get('/deactivate/user/{id}', 'AdminController@deactivateUser')->name('deactivate_user');
    Route::get('/activate/user/{id}', 'AdminController@activateUser')->name('activate_user');
    Route::get('/users/interest', 'AdminController@usersInterest')->name('users_interest');
});

Route::get('/send/message', 'MessageController@create')->name('create_message');
Route::post('/save/message', 'MessageController@store')->name('save_message');
Route::post('/send/mail', 'MessageController@sendMail')->name('send_mail');
Route::get('terms', 'AdminController@terms')->name('terms');
Route::get('/recover', 'AuthController@recover')->name('recover');
Route::post('/recover/email', 'AuthController@sendEmail')->name('send_email');
Route::get('password/recovery/{id}', 'AuthController@newPasswordView')->name('password_recovery');
Route::post('password/recovery', 'AuthController@doPasswordRecovery')->name('do_password_recovery');
