@extends('admin.layout.main')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa {{$biendata->tenTinTuc}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.artist.update',$biendata->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên Bài Viết</label>
                    <input type="text" value="{{$biendata->tenNgheNhan}}" class="form-control" id="" placeholder="Tên" name="tenNgheNhan">
                </div>
                <div class="form-group">
                    <label for="">Thay đổi ảnh</label><br>
                    <cite>Chọn Ảnh:&ensp;</cite><input type="file" name="image_new"><br><br>
                    <img style="width: 150px;" src="{{asset($biendata->image)}}">
                </div>
                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" value="{{$biendata->moTa}}" class="form-control" id="" placeholder="Tên" name="moTa">
                </div>
                <div class="form-group">
                    <label for="" >Trạng Thái</label>
                    <div>
                        <input {{($biendata->trangThai==1) ? "checked" : ""}} type="checkbox"  name="trangThai" value="1"> Hiện Thị&emsp;&emsp;&emsp;
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
