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

Route::get('/', 'IndexController@accueil');
Route::get('/about', 'IndexController@about');
Route::get('/education', 'IndexController@education');
Route::get('/experience', 'IndexController@experience');
Route::get('/service', 'IndexController@service');
Route::get('/skill', 'IndexController@skills');
Route::get('/work', 'IndexController@work');


Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
Route::post('/blog/{id}', 'BlogController@store');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

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