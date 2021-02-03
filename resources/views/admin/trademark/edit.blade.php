@extends('admin.layout.main')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa {{$biendata->tenHang}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" action="{{route('admin.trademark.update',$biendata->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên Thương Hiệu</label>
                    <input type="text" value="{{$biendata->tenHang}}" class="form-control" id="" placeholder="Tên Thương Hiệu" name="tenHang">
                </div>
                <div class="form-group">
                    <label for="">Vị Trí</label>
                    <input type="number" value="{{$biendata->viTri}}" class="form-control" id="" placeholder="Vị trí" name="viTri">
                </div>
                <div class="form-group">
                    <label for="" >Trạng Thái</label>
                    <div>
                        <input {{($biendata->trangThai==1) ? "checked" : ""}} type="checkbox"  name="trangThai" value="1"> Hiện Thị&emsp;&emsp;&emsp;
                    </div>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Trạng Thái</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
