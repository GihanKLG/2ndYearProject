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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Auth::routes();

Route::get('/admin_register', 'Auth\UserRegisterController@showRegisterForm')->name('admin.register')->middleware('authenticated','revalidate');
Route::post('/admin_register', 'Auth\UserRegisterController@register')->name('user.register.submit')->middleware('authenticated','revalidate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile')->middleware('authenticated','revalidate');
Route::post('profile', 'UserController@update_avatar')->middleware('authenticated','revalidate');


//Route::group(['middleware'=>'admin'], function(){
// Route::get('admin', array('as'=>'dashboard', 'uses'=>'UserController@admindashboard'));
//});

Route::get('/admin', 'UserController@admindashboard')->middleware('authenticated','revalidate');
Route::get('/editor', 'UserController@editordashboard')->middleware('authenticated','revalidate');

//Route::get('/admin', 'Auth\AdminLoginController@admindashboard');
//Route::get('/editor', 'Auth\AdminLoginController@editordashboard');

Route::get('/reset', 'Auth\PasswordResetController@show')->middleware('authenticated','revalidate');
Route::post('/reset', 'Auth\PasswordResetController@reset')->name('reset.submit')->middleware('authenticated','revalidate');



Route::resource('catergaries','CatergariesController');
Route::resource('UserDetails','UserDetailsController');
Route::resource('EditorDetails','EditorDetailsController');
Route::resource('active','useController');
Route::resource('device','deviceController');
Route::resource('passports','PassportController');
Route::resource('pending','pendingController');
Route::resource('reject','rejectController');
Route::post('/search','SearchController@search')->middleware('authenticated','revalidate');
Route::post('/searchuser','SearchController@searchuser')->middleware('authenticated','revalidate');
Route::post('/searchdesableuser','SearchController@searchdesableuser')->middleware('authenticated','revalidate');
Route::post('/devicesearch','SearchController@devicesearch')->middleware('authenticated','revalidate');
Route::post('/pendingsearch','SearchController@pendingsearch')->middleware('authenticated','revalidate');
Route::post('/rejectsearch','SearchController@rejectsearch')->middleware('authenticated','revalidate');