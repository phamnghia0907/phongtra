@extends('admin.layout.main')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="left">
                            <h3 class="card-title"><a href="{{route('admin.contentBanner.index')}}">Danh Sách Nội Dung Banner</a></h3>
                        </div>
                        <div class="right no-click">
                            <h3 class="card-title"><a href="{{route('admin.contentBanner.create')}}">Thêm Nội Dung Banner</a></h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>TÊN NỘI DUNG</th>
                                <th>NỘI DUNG</th>
                                <th>VỊ TRÍ</th>
                                <th>TRẠNG THÁI</th>
                                <th>EDIT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($biendata as $key => $bien)
                                <tr class="loai-{{$bien->id}} {{$bien->trangThai!=1?'trangThaiAn':''}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$bien->tenContent}}</td>
                                    <td>{{$bien->content}}</td>
                                    <td>{{$bien->viTri}}</td>
                                    <td>{{$bien->trangThai==1?'Hiện':'Ẩn'}}</td>
                                    <td>
                                        <a href="{{route('admin.contentBanner.edit',[$bien->id])}}" class="fas fa-edit"></a>
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
