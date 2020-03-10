<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('admin.exam.exam',[ 'title' => 'Danh Sách Đề Thi']);
    }

    public function listexam()
    {
        return view('admin.exam.listexam',[ 'title' => 'Danh Sách Thi']);
    }
}
