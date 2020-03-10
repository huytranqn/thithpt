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
//client route
Route::get('/', 'Client\HomeController@index');
//admin route
Route::get('/admin', 'Auth\LoginController@getLogin');

Route::get('/admin/home', 'Admin\HomeController@index');

Route::get('/admin/question', 'Admin\ExamController@index');

Route::post('/login', 'Auth\LoginController@postLogin');

Route::get('/admin/exam', 'Admin\ExamController@index');

Route::get('/admin/listexam', 'Admin\ExamController@listexam');

Route::get('/admin/subject', 'Admin\SubjectController@index');

Route::get('/admin/subject/addsub', 'Admin\SubjectController@add');

Route::get('/subject', 'subjectController@index');

Route::get('/admin/student', 'Admin\StudentController@index');

Route::get('/admin/student/addstu', 'Admin\StudentController@add');

Route::get('/admin/question', 'Admin\QuestionController@index');

Route::get('/admin/question/addque', 'Admin\QuestionController@add');

Route::get('model/select-all', function () {
    $data=App\User::all()->tojSON();
    echo"<pre>";
    print_r($data);
    echo"<pre>";
});


