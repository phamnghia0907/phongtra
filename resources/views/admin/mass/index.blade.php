@extends('admin.layout.main')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="left">
                            <h3 class="card-title"><a href="{{route('admin.mass.index')}}">Danh Sách Khối Lượng</a></h3>
                        </div>
                        <div class="right no-click">
                            <h3 class="card-title"><a href="{{route('admin.mass.create')}}">Thêm Khối Lượng</a></h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(session('alert'))
                            <div>
                                <script>alert('Thêm khối lượng thành công!');</script>
                            </div>
                        @endif
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>KHỐI LƯỢNG</th>
                                <th>TRẠNG THÁI</th>
                                <th>EDIT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($biendata as $key => $bien)
                                <tr class="loai-{{$bien->id}} {{$bien->trangThai!=1?'trangThaiAn':''}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$bien->khoiLuong}}</td>
                                    <td>{{$bien->trangThai==1?'Hiện':'Ẩn'}}</td>
                                    <td>
                                        <a href="{{route('admin.mass.edit',[$bien->id])}}" class="fas fa-edit"></a>
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
