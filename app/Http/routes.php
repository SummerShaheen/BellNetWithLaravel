<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('list','GuestController@listcomment');


Route::get('guest','GuestController@index');

Route::post('add','GuestController@add');
*/

Route::get('/', 'WelcomeController@index');
//user
//home page
Route::get('home','UserController@index');
//Route::post('login','UserController@login');
//Route::post('signup','UserController@signup');


//schedule
Route::get('schedule','ScheduleController@schedule');
Route::get('coursecontent','ScheduleController@content');
Route::post('createcontent','ScheduleController@create_content');





//test
//Route::get('');
Route::post('resulttest','TestController@resulttest');
Route::get('testview','TestController@testview');
Route::post('test','TestController@create');
Route::get('finaltest','TestController@finaltest');




//course


Route::get('cs','CourseController@cs');
Route::get('art','CourseController@art');
Route::get('business','CourseController@business');
Route::get('datascience','CourseController@datascience');
Route::get('language','CourseController@language');
Route::get('life','CourseController@life');
Route::get('math','CourseController@math');
Route::get('personal','CourseController@personal');
Route::get('physical','CourseController@physical');
Route::get('social','CourseController@social');





