<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/linkstorage', function(){
    Artisan::call('storage:link');
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
Route::post('/blog/{id}', 'BlogController@store');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/education', 'EducationController@index');
Route::get('/experience', 'ExperienceController@index');
Route::get('/service', 'ServiceController@index');
Route::get('/skills', 'SkillsController@index');
Route::get('/work', 'WorkController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**admin route */

route::namespace('Admin')->group(function (){
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
    Route::resource('/admin/blog', 'BlogController');
    Route::resource('/admin/message', 'MessageController');
    //////
    Route::resource('/admin/experience', 'ExperienceController');
    Route::resource('/admin/education', 'EducationController');
    Route::resource('/admin/service', 'ServiceController');
    Route::resource('/admin/skill', 'SkillController');
    Route::resource('/admin/work', 'WorkController');
    //////
});