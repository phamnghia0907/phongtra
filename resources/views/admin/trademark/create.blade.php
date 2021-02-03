@extends('admin.layout.main')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">THÊM THƯƠNG HIỆU</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.trademark.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên Thương Hiệu" name="tenHang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Vị Trí</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Vị trí" name="viTri">
                </div>
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
