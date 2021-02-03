@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="left no-click">
                <h3 class="card-title"><a href="{{route('admin.contentBanner.index')}}">Danh Sách Nội Dung Banner</a></h3>
            </div>
            <div class="right">
                <h3 class="card-title"><a href="{{route('admin.contentBanner.create')}}">Thêm Nội Dung Banner</a></h3>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.contentBanner.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Nội Dung Banner</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên nội dung banner" name="tenContent">
                </div>
                @if($errors->has('tenContent'))
                    <span class="">{{$errors->first('khoiLuong')}}</span>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Nội Dung Banner</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập nội dung banner" name="content">
                </div>
                @if($errors->has('content'))
                    <span class="">{{$errors->first('content')}}</span>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Vị Trí Nội Dung Banner</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Vị trí nội dung banner" name="viTri">
                </div>
                @if($errors->has('tenContent'))
                    <span class="">{{$errors->first('khoiLuong')}}</span>
                @endif
                <div class="form-group">
                    <label for="exampleInputPassword1">Trạng Thái</label>
                    <div>
                        <input type="checkbox"  name="trangThai" value="1"> Hiện Thị&emsp;&emsp;&emsp;
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
