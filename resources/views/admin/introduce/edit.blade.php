@extends('admin.layout.main')
@section('content')
    <div class="card title">
        <div class="card-header card-body">
            <h3 class="card-title">Chi tiết giới thiệu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.introduce.update',$biendata->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nội Dung</label>
                    <textarea style="height: 1200px;" class="form-control" placeholder="Nhập nội dung của phần giới thiệu" name="noiDung">{!!$biendata->noiDung!!}</textarea>
                    <script>
                        CKEDITOR.replace( 'noiDung' );
                    </script>
                </div>
                <div class="form-group">
                    <label for="" >Trạng Thái</label>
                    <div>
                        <input {{($biendata->trangThai==1) ? "checked" : ""}} type="checkbox"  name="trangThai" value="1"> Sử Dụng Giới Thiệu Này&emsp;&emsp;&emsp;
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.introduce.index')}}">Quay lại</a>&emsp;&emsp;<button type="submit" class="btn btn-primary">Cập Nhật</button>
            </div>
        </form>
    </div>
@endsection
