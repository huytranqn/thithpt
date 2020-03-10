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

<<<<<<< HEAD
Route::get('/', 'Admin\HomeController@index');
=======
Route::get('/', 'Auth\LoginController@getLogin');

Route::get('/home', 'HomeController@index');
>>>>>>> 4d13e9adda4f4f5d3b5d40131a9ff4695f12627e

Route::get('/question', 'ExamController@index');

Route::get('/exam', 'ExamController@index');

Route::get('/listexam', 'ExamController@listexam');

Route::get('/subject', 'SubjectController@index');

Route::get('/subject/addsub', 'SubjectController@add');

Route::get('/student', 'StudentController@index');

Route::get('/student/addstu', 'StudentController@add');

Route::get('/question', 'QuestionController@index');

Route::get('/question/addque', 'QuestionController@add');

Route::get('model/select-all', function () {
    $data=App\User::all()->tojSON();
    echo"<pre>";
    print_r($data);
    echo"<pre>";
});


