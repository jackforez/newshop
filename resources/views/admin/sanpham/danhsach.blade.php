@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            @if(count($errors)>0)
                     <div class="alert alert-danger">    
                        @foreach($errors->all() as $e)
                        {{$e}}</br>
                        @endforeach
                     </div>
                     @endif
                     @if(session('thongbao'))
                     <div class="alert alert-success">
                        {{session('thongbao')}}
                     </div>
                     @endif
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="width:5%">ID</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th style="text-align:center;width:10%">Loại SP</th>
                                        <th style="text-align:center;width:20%">Hình Sản Phẩm</th>
                                        <th style="text-align:center;width:10%">Delete</th>
                                        <th style="text-align:center;width:10%">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sanpham as $sp)
                                    <tr class="odd gradeX">
                                        <td>{{$sp->id}}</td>
                                        <td>{{$sp->tensp}}</td>
                                        <td>{{$sp->tenloaisp}}</td>
                                        <td>
                                            <div class="modal fade" id="{{$sp->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="upload/{{$sp->img}}" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade" id="{{$sp->id}}1" role="dialog">
                                                <div class="modal-dialog">
                                                <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="upload/{{$sp->img1}}" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade" id="{{$sp->id}}2" role="dialog">
                                                <div class="modal-dialog">
                                                <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="upload/{{$sp->img2}}" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            @if($sp->img != "")
                                                1: <a href="#" data-toggle="modal" data-target="#{{$sp->id}}">{{$sp->img}}</a></br>
                                            @else
                                                1: <label style="color:red;">chưa có</label>     
                                            @endif                                            
                                            
                                            @if($sp->img1 != "")
                                                2: <a href="#" data-toggle="modal" data-target="#{{$sp->id}}1">{{$sp->img1}}</a></br>  
                                            @else
                                                2:<label style="color:red;">chưa có</label></br> 
                                            @endif         
                                                
                                            @if($sp->img2 != "")
                                                3:<a href="#" data-toggle="modal" data-target="#{{$sp->id}}2">{{$sp->img2}}</a></br>
                                            @else
                                                3: <label style="color:red;">chưa có</label></br>
                                            @endif         
                                            
                                        </td>
                                        <td style="text-align:center">
                                            <a href="#">
                                                <i class="fa fa-trash-o fa-fw"></i> Delete
                                            </a>
                                        </td>
                                        <td style="text-align:center">
                                            <a href="admin/sanpham/sua/{{$sp->id}}">
                                                <i class="fa fa-pencil fa-fw"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="row">{{$sanpham->links()}}</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
@endsection