<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\SubjectsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Admin\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $data['subject']=Subject::all();
        return view('admin.subject.subject',[ 'title' => 'Môn học'],$data);  
    }

    public function add()
    {
        return view('admin.subject.addsub',[ 'title' => 'Thêm Môn Học']);
    }

    public function doUpLoad(Request $request){
        echo "abc";
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ]);
        if ($request->file('select_file')) {
            var_dump(new SubjectsImport());
            Excel::import(new SubjectsImport(), request()->file('select_file'));
            return back()->with('success', 'Excel Data Imported successfully.');;
        }
        return back();
    }
}
