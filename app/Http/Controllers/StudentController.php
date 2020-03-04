<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.student',[ 'title' => 'Học Sinh']);
    }

    public function add()
    {
        return view('admin.student.addstu',[ 'title' => 'Thêm Học Sinh']);
    }

}
