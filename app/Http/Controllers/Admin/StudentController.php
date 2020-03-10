<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User ;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {
        //$data=User::select('id','fullname','cmnd','gender','namsinh','list_subject')->orderBy('id','DESC')->get();
        $data['student']=User::all();
        //var_dump($data);
        //$data['namsinh']=$data->namsinh->format('dd/mm/YYYY');
        return view('admin.student.student',[ 'title' => 'Học Sinh'],$data);      
    }

    public function add()
    {
        return view('admin.student.addstu',[ 'title' => 'Thêm Học Sinh']);
    }

}
