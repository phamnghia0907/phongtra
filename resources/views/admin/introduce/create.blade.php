@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="left no-click">
                <h3 class="card-title"><a href="{{route('admin.introduce.index')}}">Danh Sách Giới Thiệu</a></h3>
            </div>
            <div class="right">
                <h3 class="card-title"><a href="{{route('admin.introduce.create')}}">Thêm Giới Thiệu</a></h3>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" action="{{route('admin.introduce.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội Dung</label>
                    <textarea class="form-control" placeholder="Nhập nội dung của phần giới thiệu" name="noiDung"></textarea>
                    <script>
                        CKEDITOR.replace( 'noiDung' );
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trạng Thái</label>
                    <div>
                        <input type="checkbox"  name="trangThai" value="1"> Sử dụng giới thiệu này&emsp;&emsp;&emsp;
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
