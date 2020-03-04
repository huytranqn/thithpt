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

Route::get('/', 'HomeController@index');

Route::get('/question', 'ExamController@index');

Route::get('/exam', 'ExamController@index');

Route::get('/listexam', 'ExamController@listexam');

Route::get('/subject', 'SubjectController@index');

Route::get('/subject/addsub', 'SubjectController@add');

Route::get('/student', 'StudentController@index');

Route::get('/student/addstu', 'StudentController@add');

Route::get('/question', 'QuestionController@index');

Route::get('/question/addque', 'QuestionController@add');




