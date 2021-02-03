@extends('admin.layout.main')
@section('content')
    <section class="content">
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
                        <form role="form" action="{{route('admin.product.update',$biendata->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                    <input value="{{$biendata->ten}}" type="text" class="form-control" id="exampleInputEmail1" name="ten" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thương Hiệu</label>
                                    <select name="idHang" class="form-control" id="exampleInputPassword1">
                                        @foreach($biendata_array[0] as $data)
                                            <option value="{{$data->id}}" {{$biendata->idHang==$data->id?'selected':''}}>{{$data->tenHang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc Loại</label>
                                    <select name="idLoai" class="form-control" id="exampleInputPassword1">
                                        @foreach($biendata_array[1] as $data)
                                            <option value="{{$data->id}}" {{$biendata->idLoai==$data->id?'selected':''}}>{{$data->tenLoai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá Của Sản Phẩm (100g)</label>
                                         <input value="{{$biendata->gia}}" type="number" name="gia" class="form-control" id="exampleInputPassword1">
                                </div>
{{--                                Tách id khối lượng trong sản phẩm--}}
                                <?php
                                    $khoiLuong_array=explode(',', $biendata->idKhoiLuong);
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Khối Lượng Sử Dụng (g)</label>
                                    <div class="custom-file">
                                        @foreach($biendata_array[2] as $data)
                                            <input <?php
                                                foreach($khoiLuong_array as $khoiLuong){
                                                    if ($data->id==$khoiLuong)
                                                        echo "checked";
                                                }
                                                   ?> type="checkbox" name="idKhoiLuong[]" value="{{$data->id}}" id="exampleInputFile">
                                        {{$data->khoiLuong}}&emsp;
                                        @endforeach
                                    </div>
                                </div>

                                {{--Tách id khối lượng trong sản phẩm--}}
                                <?php
                                $cachDung_array=explode('@', $biendata->cachDung);
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Cách Dùng</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                        </div>
                                        <input type="text" value="{{$cachDung_array[0]}}" name="cachDung1" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-utensil-spoon"></i></span>
                                        </div>
                                        <input type="text" value="{{$cachDung_array[1]}}" name="cachDung2" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" value="{{$cachDung_array[2]}}" name="cachDung3" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="input-group mb-3" style="padding-top: 10px;">
                                    <label for="">Thay đổi ảnh</label><br>
                                    <cite>Chọn Ảnh:&ensp;</cite><input type="file" name="image_new"><br><br>
                                    <img style="width: 150px;" src="{{asset($biendata->image)}}">
                                </div>
                                <div class="form-group">
                                    <input {{($biendata->trangThai==1) ? "checked" : ""}} type="checkbox"  name="trangThai" value="1" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> Hiển Thị Sản Phẩm&emsp;&emsp;&emsp;&ensp;</label>
                                    <input {{($biendata->hot==1) ? "checked" : ""}} type="checkbox"  name="hot" value="1"  id="exampleCheck1">
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
                                            <textarea style="height: 1200px;" class="form-control" placeholder="Nhập nội dung của Sản Phẩm" name="moTaChiTiet">{!!$biendata->moTaChiTiet!!}</textarea>
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
    </section>

@endsection
