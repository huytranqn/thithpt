<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User ;

class StudentController extends Controller
{
    public function index()
    {
        $data['student']=User::all();
<<<<<<< HEAD
        return view('admin.student.student',[ 'title' => 'Học Sinh'],$data);      
=======
        //var_dump($data);
        //$data['namsinh']=$data->namsinh->format('dd/mm/YYYY');
        return view('admin.student.student',[ 'title' => 'Học Sinh'],$data);
>>>>>>> d2f0e083594a9a2eefd627a6749f58db52a92e28
    }

    public function add()
    {
        return view('admin.student.addstu',[ 'title' => 'Thêm Học Sinh']);
    }

    public function importfile(Request $request){
        if($request->hasFile('inputFile')){
            $file = $request->file('inputFile');
            $name_file=$file->getClientOriginalName();
            $path_file='/public/admin/upload';
            $file->move($path_file,$name_file );
            $result['status_value']="Đã Up File";
            $result['status']=1;
        }
        else{
            $result['status_value']="Thất Bại";
            $result['status']=0;
        }
        echo json_encode($result);

        // $objPHPExcel = PHPExcel_IOFactory::load(base_path($file)); // load file ra object PHPExcel
        // $userSheet = $objPHPExcel->setActiveSheetIndex(0); // Set sheet sẽ được đọc dữ liệu
        // $highestRow    = $provinceSheet->getHighestRow(); // Lấy số row lớn nhất trong sheet
        // for ($row = 2; $row <= $highestRow; $row++) { // For chạy từ 2 vì row 1 là title
        //    User::create([
        //        'id' => $userSheet->getCellByColumnAndRow(0, $row)->getValue(), // lấy dữ liệu từng ô theo col và row
        //        'username' => $userSheet->getCellByColumnAndRow(1, $row)->getValue(),
        //        'password' => $userSheet->getCellByColumnAndRow(2, $row)->getValue(),
        //        'fullname' => $userSheet->getCellByColumnAndRow(3, $row)->getValue(),
        //        'gender' => $userSheet->getCellByColumnAndRow(4, $row)->getValue(),
        //        'namsinh' => $userSheet->getCellByColumnAndRow(5, $row)->getValue(),
        //        'cmnd' => $userSheet->getCellByColumnAndRow(6, $row)->getValue(),
        //        'isActive' => $userSheet->getCellByColumnAndRow(7, $row)->getValue(),
        //        'created_at' => $userSheet->getCellByColumnAndRow(8, $row)->getValue(),
        //        'update_at' => $userSheet->getCellByColumnAndRow(9, $row)->getValue(),
        //    ]);
        // }
    }

}
