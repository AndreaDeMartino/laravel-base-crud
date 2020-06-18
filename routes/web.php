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

// Home
Route::get('/', 'HomeController@index')->name('home');

// Students Page
Route::get('/students', 'StudentController@index')->name('students');

// Class Pages
Route::get('/classrooms','ClassroomController@index')->name('classrooms');

// Teachers Resources
Route::resource('teachers', 'TeacherController');

// Companys Resources
Route::resource('companies', 'CompanyController');