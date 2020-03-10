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


Route::get('/', 'Auth\LoginController@getLogin');

Route::get('/home', 'Admin\HomeController@index');

Route::get('/question', 'Admin\ExamController@index');

Route::get('/exam', 'Admin\ExamController@index');

Route::get('/listexam', 'Admin\ExamController@listexam');

Route::get('/subject', 'Admin\SubjectController@index');

Route::get('/subject/addsub', 'Admin\SubjectController@add');

Route::get('/student', 'Admin\StudentController@index');

Route::get('/student/addstu', 'Admin\StudentController@add');

Route::get('/question', 'Admin\QuestionController@index');

Route::get('/question/addque', 'Admin\QuestionController@add');

Route::get('model/select-all', function () {
    $data=App\User::all()->tojSON();
    echo"<pre>";
    print_r($data);
    echo"<pre>";
});


