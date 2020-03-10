<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User ;

class StudentController extends Controller
{
    public function index()
    {
        //$data=User::select('id','fullname','cmnd','gender','namsinh','list_subject')->orderBy('id','DESC')->get()->toArray();
        //print_r($data);
        $data['student']=User::all();
        return view('admin.student.student',[ 'title' => 'Học Sinh'],$data);      
    }

    public function add()
    {
        return view('admin.student.addstu',[ 'title' => 'Thêm Học Sinh']);
    }

}
