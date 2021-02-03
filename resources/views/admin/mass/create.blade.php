@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="left no-click">
                <h3 class="card-title"><a href="{{route('admin.mass.index')}}">Danh Sách Khối Lượng</a></h3>
            </div>
            <div class="right">
                <h3 class="card-title"><a href="{{route('admin.mass.create')}}">Thêm Khối Lượng</a></h3>
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
        <form role="form" method="post" action="{{route('admin.mass.store')}}">
            @csrf
            <div class="card-body">
                @if(session('alert'))
                    <div >
                        <script>alert('Khối lượng này đã tồn tại !');</script>
                    </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Khối Lượng (g)</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nhập khối lượng" name="khoiLuong" min="100" step="100">
{{--                    @if($errors->has('tenLoai'))--}}
{{--                        <span class="">{{$errors->first('tenLoai')}}</span>--}}
{{--                    @endif--}}
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
