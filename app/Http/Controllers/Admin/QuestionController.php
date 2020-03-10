<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.question.question',[ 'title' => 'Câu Hỏi']);
    }

    public function add()
    {
        return view('admin.question.addque',[ 'title' => 'Thêm Câu Hỏi']);
    }

}
