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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/home', 'Admin\HomeController@index');

Route::get('/admin/question', 'Admin\ExamController@index');

Route::get('/admin/exam', 'Admin\ExamController@index');

Route::get('/admin/listexam', 'Admin\ExamController@listexam');

Route::get('/admin/subject', 'Admin\SubjectController@index');

Route::get('/admin/student', 'Admin\StudentController@index');

Route::get('/admin/question', 'Admin\QuestionController@index');