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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','AnonymousController@index');

Route::get('/confirm/email/{token}','Auth\RegisterController@confirm');
Route::get('/confirm/phone/number','Auth\RegisterController@showconfirmphone');
Route::post('/confirm/phone/number','Auth\RegisterController@phone');

Route::get('/404',function(){ return view('errors.404');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','Dashboard@user');
Route::get('/{name}/{id}/profile','Dashboard@profile');
Route::post('/switch/account/{id}','Dashboard@switchAccount');
Route::get('/employer','Dashboard@employer');
Route::get('/employee','Dashboard@employee');
Route::get('/setup/company','Dashboard@createcompanyprofile');
Route::get('/post/job','Dashboard@postjob');
Route::get('/create/resume','Dashboard@createresume');
Route::post('/setup/company','Dashboard@storeCompany');
Route::post('post/a/job','Dashboard@saveJobs');
Route::get('/skilldetails/{id}','Dashboard@loadSkillData')->middleware('ajax');
Route::get('/job/{id}/details','Dashboard@jobdetails');
Route::get('/my-jobs','Dashboard@myjobs');
Route::get('/find-jobs','Dashboard@findjobs');
Route::post('/create/cv','Dashboard@saveCVs');
