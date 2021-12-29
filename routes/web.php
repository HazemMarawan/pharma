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
//Admin Routes
Route::get('/Account/Login','AccountController@login')->name('login');
Route::post('/Account/PostLogin','AccountController@postLogin')->name('post_login');
Route::get('/Account/Logout','AccountController@logout')->name('logout');

Route::get('/Dashboard/Index','DashboardController@index')->name('dashboard_index');

Route::get('/Category/Index','CategoryController@index')->name('category_index');
Route::post('/Category/Save','CategoryController@save')->name('save_category');
Route::get('/Category/delete/{id?}','CategoryController@delete')->name('delete_category');

Route::get('/Product/Index','ProductController@index')->name('product_index');
Route::post('/Product/Save','ProductController@save')->name('save_product');
Route::get('/Product/delete/{id?}','ProductController@delete')->name('delete_product');

Route::get('/Blog/Index','BlogController@index')->name('blog_index');
Route::post('/Blog/Save','BlogController@save')->name('save_blog');
Route::get('/Blog/delete/{id?}','BlogController@delete')->name('delete_blog');

Route::get('/User/Index','UserController@index')->name('user_index');
Route::post('/User/Save','UserController@save')->name('save_user');
Route::get('/User/delete/{id?}','UserController@delete')->name('delete_user');

Route::get('/Contact/Index','ContactController@index')->name('contact_index');

//Front End Routes
Route::get('/','HomeController@index')->name('front_index');
Route::get('/aboutus','HomeController@aboutus')->name('front_about_us');
Route::get('/products','HomeController@products')->name('front_products');
Route::get('/blogs','HomeController@blogs')->name('front_blogs');
Route::get('/covid19','HomeController@covid')->name('front_covid_19');
Route::get('/careers','HomeController@careers')->name('front_careers');
Route::get('/careers/apply/{id?}','HomeController@careersApply')->name('front_careers_apply');
Route::get('/contactus','HomeController@contactus')->name('front_contactus');
Route::get('/careers/apply/{id?}','HomeController@careersApply')->name('front_apply_career');
Route::post('/careers/apply/to/job','HomeController@careersApplyToJob')->name('front_apply_to_job');


