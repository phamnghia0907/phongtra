@extends('frontend.layout.main')
@section('content')
    <article>
        <div class="main-sanpham">
            <div class="main-sanpham-tongquat">
                <div class="main-sanpham-title ">
                    <div class="breadcrumb ">
                        <a href="{{route('web')}}">Trang chủ</a>&ensp;><span>&ensp;Sản phẩm</span>
                    </div>
                    <h2>Sản phẩm</h2>
                    <hr>
                    <div class="breadcrumb d-flex justify-content-between">
                        <div>Bộ lọc sản phẩm</div>
                        <div>
                            <form>
                                <select>
                                    <option>Thứ tự mặc định</option>
                                    <option>Giá thấp đến cao</option>
                                    <option>Giá cao đến thấp</option>
                                    <option>Xếp theo đánh giá</option>
                                    <option>Xếp theo phổ biến</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-sanpham-left">
                    <div class="main-sanpham-left-tongquat">
                        <h4>Loại sản phẩm
                            <div class="button-loaisp">
                                <button href="#main-nav" id="open-loaisp" class="fas fa-sort-down" onclick="openLoaisp()">
                                </button>
                                <a href="javascript:void(0)" id="close-loaisp" class="fas fa-sort-up" onclick="closeLoaisp()"><span></span>
                                </a>
                            </div>
                        </h4>
                        <div class="main-sanpham-left-boloc" id="myloaisp">
                            <form>
                                @csrf
                                @foreach($biendata_array[1] as $data)
                                <div><input type="checkbox" name="danhmuc_{{$data->id}}" value="{{$data->id}}">&ensp;{{$data->tenLoai}}</div>
                                @endforeach
                            </form>
                        </div>
                        <h4>Giá thành</h4>
                        <script>
                            $( function() {
                                $( "#slider-range" ).slider({
                                    range: true,
                                    min: 0,
                                    max: 500,
                                    values: [ 75, 300 ],
                                    slide: function( event, ui ) {
                                        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                    }
                                });
                                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
                            });
                        </script>
                        <div class="main-sanpham-left-boloc">
                            <div class="content">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                </p>

                            </div>
                        </div>
                        <div>
                            <h4>Thương hiệu
                                <div class="button-thuonghieu">
                                    <button href="#main-nav" id="open-thuonghieu" class="fas fa-sort-down" onclick="openThuonghieu()">
                                    </button>
                                    <a href="javascript:void(0)" id="close-thuonghieu" class="fas fa-sort-up" onclick="closeThuonghieu()"><span></span>
                                    </a>
                                </div>
                            </h4>

                        </div>
                        <div class="main-sanpham-left-boloc" id="mythuonghieu">
                            <form>
                                @csrf
                                @foreach($biendata_array[0] as $data)
                                    <div><input type="checkbox" name="thuonghieu_{{$data->id}}" value="{{$data->id}}">&ensp;{{$data->tenHang}}</div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-sanpham-right">
                    <div class="main-sanpham-right-tongquan">
                        <div class="main-sanpham-right-tongquan-chitiet">
                            @foreach($biendata_array[2] as $data)
                            <div class="main-sanpham-right-chitiet">
                                <div class="main-sanpham-right-chitiet-top d-flex justify-content-between">
                                    <div class="main-sanpham-right-chitiet-sao">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span>(0)</span>
                                    </div>
                                    <div class="main-sanpham-right-chitiet-new">NEW</div>
                                </div>
                                <img src="{{$data->image}}">
                                <h4>{{$data->ten}}</h4>
                                <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                    <div class="main-sanpham-right-chitiet-gia">{{$data->gia}}<span>VNĐ</span></div>
                                    <div class="main-sanpham-right-chitiet-luong">
                                        <?php
                                            $khoiLuong_array=explode(',', $data->idKhoiLuong);

                                        ?>
                                            <select name="trongluong">
                                                @foreach($khoiLuong_array as $khoiLuong)
                                                    <option selected="">{{$khoiLuong}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                @foreach($biendata_array[2] as $data)
                                    <div class="main-sanpham-right-chitiet">
                                        <div class="main-sanpham-right-chitiet-top d-flex justify-content-between">
                                            <div class="main-sanpham-right-chitiet-sao">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span>(0)</span>
                                            </div>
                                            <div class="main-sanpham-right-chitiet-new">NEW</div>
                                        </div>
                                        <img src="{{$data->image}}">
                                        <h4>{{$data->ten}}</h4>
                                        <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                            <div class="main-sanpham-right-chitiet-gia">{{$data->gia}}<span>VNĐ</span></div>
                                            <div class="main-sanpham-right-chitiet-luong">
                                                <?php
                                                $khoiLuong_array=explode(',', $data->idKhoiLuong);

                                                ?>
                                                <select name="trongluong">
                                                    @foreach($khoiLuong_array as $khoiLuong)
                                                        <option selected="">{{$khoiLuong}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($biendata_array[2] as $data)
                                    <div class="main-sanpham-right-chitiet">
                                        <div class="main-sanpham-right-chitiet-top d-flex justify-content-between">
                                            <div class="main-sanpham-right-chitiet-sao">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span>(0)</span>
                                            </div>
                                            <div class="main-sanpham-right-chitiet-new">NEW</div>
                                        </div>
                                        <img src="{{$data->image}}">
                                        <h4>{{$data->ten}}</h4>
                                        <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                            <div class="main-sanpham-right-chitiet-gia">{{$data->gia}}<span>VNĐ</span></div>
                                            <div class="main-sanpham-right-chitiet-luong">
                                                <?php
                                                $khoiLuong_array=explode(',', $data->idKhoiLuong);

                                                ?>
                                                <select name="trongluong">
                                                    @foreach($khoiLuong_array as $khoiLuong)
                                                        <option selected="">{{$khoiLuong}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>@break;
                                @endforeach
                        </div>
                    </div>
                    <div class="main-sanpham-right-tongquan">
                        <div class="main-botton-trang d-flex justify-content-center">
                            <ul>
                                <li><a href="#">1</a>&ensp;</li>
                                <li><a href="#">2</a>&ensp;</li>
                                <li><a href="#">3</a>&ensp;</li>
                                <li><a href="#">4</a>&ensp;</li>
                                <li><a href="#">></a>&ensp;</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
