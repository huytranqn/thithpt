<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return view('admin.subject.subject',[ 'title' => 'Môn Học']);
    }

    public function add()
    {
        return view('admin.subject.addsub',[ 'title' => 'Thêm Môn Học']);
    }

}
