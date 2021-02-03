@extends('admin.layout.main')
@section('content')
<div class="card">
  <div class="card-header">
      <div class="left no-click">
          <h3 class="card-title"><a href="{{route('admin.category.index')}}">DÁNH SÁCH CÁC LOẠI SẢN PHẨM</a></h3>
      </div>
      <div class="right">
          <h3 class="card-title"><a href="">THÊM LOẠI SẢN PHẨM</a></h3>
      </div>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Lỗi!</h4>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
  <form role="form" method="post" action="{{route('admin.category.store')}}">
  	@csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên Loại Sản Phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên" name="tenLoai">
          @if($errors->has('tenLoai'))
              <span class="">{{$errors->first('tenLoai')}}</span>
          @endif
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
