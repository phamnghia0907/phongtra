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
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">THÔNG TIN SẢN PHẨM</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="ten" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Thương Hiệu</label>
                                                <select name="idHang" class="form-control" id="exampleInputPassword1">
                                                    <option value="0" >------- Chọn thương hiệu -------</option>
                                                    @foreach($biendata_array[0] as $data)
                                                        <option value="{{$data->id}}">{{$data->tenHang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Thuộc Loại</label>
                                                <select name="idLoai" class="form-control" id="exampleInputPassword1">
                                                    <option value="0" >------------ Chọn Loại --------------</option>
                                                    @foreach($biendata_array[1] as $data)
                                                        <option value="{{$data->id}}" >{{$data->tenLoai}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Giá Của Sản Phẩm (100g)</label>
                                                <input value="" type="number"  name="gia" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Khối Lượng Sử Dụng (g)</label>
                                                <div class="custom-file">
                                                    @foreach($biendata_array[2] as $data)
                                                        <input type="checkbox" name="idKhoiLuong[]" value="{{$data->id}}" id="exampleInputFile">
                                                        {{$data->khoiLuong}}&emsp;
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Cách Dùng</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                                    </div>
                                                    <input type="text" name="cachDung1" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-utensil-spoon"></i></span>
                                                    </div>
                                                    <input type="text" name="cachDung2" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                    </div>
                                                    <input type="text" name="cachDung3" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="input-group mb-3" style="padding-top: 10px;">
                                                <label for="">Ảnh Sản Phẩm</label><br>
                                                <cite>Chọn Ảnh:&ensp;</cite><input type="file" name="image"><br><br>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox"  name="trangThai" value="1" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"> Hiển Thị Sản Phẩm&emsp;&emsp;&emsp;&ensp;</label>
                                                <input type="checkbox"  name="hot" value="1"  id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck2">Hot</label>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                </div>
                                <!-- /.card -->

                                <!-- Form Element sizes -->

                                <!-- Input addon -->


                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->
                            <div class="col-md-6">
                                <!-- general form elements disabled -->
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Mô Tả Chi Tiết</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <textarea style="height: 1200px;" class="form-control" placeholder="Nhập nội dung của Sản Phẩm" name="moTaChiTiet"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'moTaChiTiet' );
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- input states -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (right) -->
                            <div class="card-footer col-md-12" style="background-color: #f4f6f9; text-align: center; padding-top: 0">
                                <button type="submit" class="btn btn-primary" style="padding: 5px 60px;">Lưu</button>
                                </form>
                            </div>

                        </div>

                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
