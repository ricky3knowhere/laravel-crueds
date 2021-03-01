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


 Route::get('/', 'PagesController@index');
 Route::get('/about', 'PagesController@about');

Route::resource('student', 'StudentController');

// Route::get('/students', 'Studentscontroller@index');
// Route::post('/students', 'Studentscontroller@store');
// Route::get('/students/create', 'Studentscontroller@create');
// Route::get('/students/{student}', 'Studentscontroller@show');
// Route::delete('/students/{student}', 'Studentscontroller@destroy');
// Route::get('/students/{student}/edit', 'Studentscontroller@edit');
// Route::patch('/students/{student}', 'Studentscontroller@update');


Route::resource('students', 'Studentscontroller');