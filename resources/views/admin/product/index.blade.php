@extends('admin.layout.main')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="left">
                            <h3 class="card-title"><a href="{{route('admin.product.index')}}">Danh Sách Sản Phẩm</a></h3>
                        </div>
                        <div class="right no-click">
                            <h3 class="card-title"><a href="{{route('admin.product.create')}}">Thêm Sản Phẩm</a></h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>THƯƠNG HIỆU</th>
                                <th>LOẠI SẢN PHẨM</th>
                                <th>ẢNH SẢN PHẨM</th>
                                <th>GIÁ (100g)</th>
                                <th>HOT</th>
                                <th>TRẠNG THÁI</th>
                                <th>EDIT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($biendata as $key => $bien)
                                <tr class="loai-{{$bien->id}} {{$bien->trangThai!=1?'trangThaiAn':''}}">
                                    <td>{{$key+1}}</td>
                                    <td><a href="{{route('admin.product.edit',$bien->id)}}">{{$bien->ten}}</a></td>

                                    <td>{{$bien->trademark->tenHang}}</td>
                                    <td>{{$bien->category->tenLoai}}</td>
                                    <td><img style="width: 150px;" src="/{{$bien->image}}"></td>
                                    <td>{{$bien->gia}}</td>
                                    <td>
                                            @if($bien->hot==1)
                                                <span style="color: #28a745" class="fas fa-check"></span>
                                            @else
                                                {{''}}
                                        @endif

                                    </td>
{{--                                    <td>{{$bien->hot==1?<span style="color: #28a745" class="fas fa-check"></span>{{:''}}</td>--}}
                                    <td>{{$bien->trangThai==1?'Hiện':'Ẩn'}}</td>
                                    <td>
                                        <a href="{{route('admin.news.edit',[$bien->id])}}" class="fas fa-edit"></a>
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
