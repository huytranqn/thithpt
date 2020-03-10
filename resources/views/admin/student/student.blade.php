@extends('admin.share.master')
@section('content')
<section class="content-header">
    <h1>
        Học Sinh
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Học Sinh</a></li>
        <li class="active">Danh sách học sinh</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                {{-- <div class="box-header with-border">
                    <h3 class="box-title">Danh sách học sinh</h3>
                    <div class="pull-right">
                        <a href="{{ asset ('/student/addstu ') }}" class="btn btn-info "> <i class="fa  fa-plus"></i> Thêm mới</a>
                    </div>
                </div> --}}
                <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                    <h3 class="box-title">Danh sách học sinh</h3>
                    <div class="pull-right">
                        <a class="btn btn-app ">
                            <input type="file" id="exampleInputFile">
                        </a>
                        <a class="btn btn-app "><i class="glyphicon glyphicon-import"></i>Import</a>
                        <a class="btn btn-app "><i class="glyphicon glyphicon-export"></i>Export</a>
                    </div>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>CMND</th>
                                <th>Môn Thi</th>
                                <th>Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item )
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->fullname}}</td>
                                    <td>{{ $item->namsinh}}</td>
                                    <td>{{ $item->gender}}</td>
                                    <td>{{ $item->cmnd}}</td>
                                    <td> 
                                        <?php 
                                           // $subject=DB::table('subjects')->where('id',$item["list_subject"]);
                                           // echo $subject->name;
                                        ?>
                                    </td>
                                    <td>
                                        <i title="Sửa" class="fa fa-pencil-square-o" style="margin-right: 5px;margin-left: 5px;"></i>
                                        <i title=" Hiện " class="fa fa-eye"> </i>
                                        <i title=" Ẩn " class="fa fa-eye-slash"> </i>
                                        <i title=" Xóa " class="fa fa-trash-o " style="color: darkred; "></i>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection()
