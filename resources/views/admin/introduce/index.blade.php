@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="left">
                            <h3 class="card-title"><a href="{{route('admin.introduce.index')}}">Danh Sách Giới Thiệu</a></h3>
                        </div>
                        <div class="right no-click">
                            <h3 class="card-title"><a href="{{route('admin.introduce.create')}}">Thêm Giới Thiệu</a></h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>NỘI DUNG GIỚI THIỆU</th>
                                <th>TRANG THÁI</th>
                                <th>EDIT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($biendata as $key => $bien)
                                <tr class="loai-{{$bien->id}} {{$bien->trangThai!=1?'trangThaiAn':''}}">
                                    <td>{{$key+1}}</td>
                                    <?php
                                        $moTaNgan=explode("\r\n", $bien->noiDung);
                                    ?>
                                    <td>
                                      <div class="moTaNgan">{!!$moTaNgan[0]!!}<a href="{{route('admin.introduce.edit',[$bien->id])}}">&ensp;Xem thêm</a> </div>
                                    </td>
                                    <td>{{$bien->trangThai==1?'Đang sử dụng':'Ẩn'}}</td>
                                    <td>
{{--                                        <a href="{{route('admin.news.edit',[$bien->id])}}" class="fas fa-edit"></a>--}}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-trang">
                        {{$biendata->links()}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
