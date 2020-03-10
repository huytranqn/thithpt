@extends('admin.share.master')
@section('content')
    <section class="content-header">
        <h1>
            Môn Học
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Môn Học</a></li>
            <li class="active">Danh sách môn học</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    {{-- <div class="box-header">
                        <h3 class="box-title">Danh sách môn học</h3>
                        <div class="pull-right">
                            <a href="{{ asset ('/subject/addsub ') }}" class="btn btn-info "> <i class="fa  fa-plus"></i> Thêm mới</a>
                        </div>
                    </div> --}}
                    <div class="box-header" style="text-align: height: 50px;line-height: 50px;white-space: nowrap;">
                        <h3 class="box-title">Danh sách môn học</h3>
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
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Công cụ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>qq</td>
                                    <td>Internet Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>
                                        <i title="Sửa" class="fa fa-pencil-square-o" style="margin-right: 5px;margin-left: 5px;"></i>
                                        <i title=" Hiện " class="fa fa-eye"> </i>
                                        <i title=" Ẩn " class="fa fa-eye-slash"> </i>
                                        <i title=" Xóa " class="fa fa-trash-o " style="color: darkred; "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>cc</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>cc</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>cc
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
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
