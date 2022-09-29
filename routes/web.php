<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', function () {
    return view('welcome');

})->name('home');
Route::post('/login', 'UserController@login')->name('userlogin');

Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');
Route::get('dashboard','DashboardController@index')->name('dashboard.index')->middleware('checktoken');

Route::resource('profile', 'ProfileController')->except('index')->middleware('checktoken');

Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');

Route::post('/reset_password_first', 'UserController@ResetPasswordFirst')->name('reset_password_first');

Route::get('/reset_password', function () {
    return view('reset_password');
})->name('reset_password');

Route::post('/reset_password_sec', 'UserController@ResetPasswordSec')->name('reset_password_sec');





Route::get('show_profile/{page?}','ProfileController@index')->name('profile.index')->middleware('checktoken');

Route::get('view_profile/{page?}','ProfileController@viewprofile')->name('view_profile')->middleware('checktoken');

Route::get('editprofile/{id}/edit','ProfileController@editprofile')->name('editprofile')->middleware('checktoken');
Route::put('editprofile','ProfileController@updateprofile')->name('editprofile')->middleware('checktoken');

Route::put('update_password', 'ProfileController@updatepassword')->name('update_password')->middleware('checktoken');

Route::get('change_password','ProfileController@passwordedit')->name('change_password.index')->middleware('checktoken');
Route::resource('users', 'UserController')->except('index')->middleware('checktoken');

Route::get('user_list/{page?}','UserController@index')->name('user.index')->middleware('checktoken');
Route::resource('roles', 'RoleController')->except('index')->middleware('checktoken');

Route::get('role_list/{page?}','RoleController@index')->name('role.index')->middleware('checktoken');


Route::resource('permissions', 'PermissionController')->except('index')->middleware('checktoken');

Route::get('permission_list/{page?}','PermissionController@index')->name('permission.index')->middleware('checktoken');
Route::resource('news', 'NewsController')->except('index')->middleware('checktoken');

Route::get('news_list/{page?}','NewsController@index')->name('news.index')->middleware('checktoken');

Route::resource('experience', 'ExperienceController')->except('index')->middleware('checktoken');

Route::get('experience_list/{page?}','ExperienceController@index')->name('experience.index')->middleware('checktoken');

Route::resource('purchase', 'PurchaseController')->except('index')->middleware('checktoken');

Route::get('purchase_list/{page?}','PurchaseController@index')->name('purchase.index')->middleware('checktoken');
Route::get('getprice/{exp_id}','PurchaseController@getprice')->name('getprice.ajax')->middleware('checktoken');

Route::resource('myweek', 'MyweekController')->except('index')->middleware('checktoken');

Route::get('myweek_list/{page?}','MyweekController@index')->name('myweek.index')->middleware('checktoken');


Route::post('assets/storeimage/{module}/{id}', 'AssetsController@store')->name('assets.storeimage')->middleware('checktoken');

Route::resource('assets', 'AssetsController')->except('store')->middleware('checktoken');



Route::get('{slug?}/{id}/edit/assets','AssetsController@editimage')->name('assets.edit')->middleware('checktoken');
