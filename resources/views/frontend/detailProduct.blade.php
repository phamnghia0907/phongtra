@extends('frontend.layout.main')
@section('content')
    <!------------------ main ---------------------->
    <article>
        <div class="main-sanpham background-chitiet">
            <div class="main-sanpham-tongquat ">
                <div class="main-sanpham-title" style="float: none">
                    <div class="breadcrumb ">
                        <a href="#">Trang chủ</a>&ensp;>&ensp;<a href="#">Sản phẩm</a>&ensp;><span>&ensp;Chi Tiết Sản phẩm</span>
                    </div>
                </div>
                <!------------------- main-top ---------------------->
                <div class="main-chitietsanpham-top row">
                    <div class="left col-md-8">
                        <div class="left-slider">
                            <a class="prev fas fa-chevron-up" onclick="plusSlides(-1)"></a>
                            <div class="button-anh">
                                <div class="button-image"><img src="/frontend/images/chitietsanpham/img-1.jpg"></div>
                                <div class="button-image"><img src="/frontend/images/chitietsanpham/img-1.jpg"></div>
                                <div class="button-image"><img src="/frontend/images/chitietsanpham/img-1.jpg"></div>
                            </div>
                            <a class="next fas fa-chevron-down" onclick="plusSlides(1)"></a>
                        </div>
                        <div class="right-slider">
                            <div class="slider-anh">
                                <div class="mySlider-anh"><img src="/frontend/images/chitietsanpham/main.jpg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-md-4">
                        <h3>Trà Shan Tuyết</h3>
                        <p class="evaluate">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            &ensp;<span>(0 đánh giá)</span>
                        </p>
                        <div class="price">
                            <form>
                                <p>50,000 <span>VNĐ</span>
                                    <select>
                                        <option>100g</option>
                                        <option>200g</option>
                                    </select>
                                </p>
                            </form>
                        </div>
                        <p class="col-md-8">
                            <strong>SẢN PHẨM ĐẠT CHUẨN VỆ SINH AN TOÀN THỰC PHẨM</strong>
                        </p>
                        <div class="content">
                            <p>Trà Shan Tuyết (Chè Shan Tuyết) hay còn được gọi là trà tuyết. Đây là loại trà đặc sản của các đồng bào tộc người Tày, Giao, Mông và đặc sản của các tỉnh như Hà Giang, Điện Biên, Lào cai</p>
                            <p>Đặc điểm của trà Shan Tuyết là búp trà (cánh trà) rất to và màu trắng, dưới cánh trà phủ 1 lớp lông tơ mịn màu trắng</p>
                            <p>Cây trà Shan Tuyết cổ thụ rất lớn, có khi vài người lớn vòng tay ôm. Mọc ở trên núi cao hơn 1200m, quanh năm mây mù và lạnh.sự chệnh lệch nhiệt độ giữa ngày và đêm là rất lờn, chính bởi có điều kiện tự nhiện thú vị như vậy nên đó là nét độc đáo tạo ra một hương vị trà shan tuyết cổ thụ thơm ngon</p>
                        </div>
                    </div>
                </div>

                <!------------------- main-between ---------------------->
                <div class="main-chitietsanpham-between row">
                    <div class="left col-md-5 d-flex justify-content-center">
                        <div class="tongquat col-md-10">
                            <h2>Hướng dẫn pha<br>Trà Shan Tuyết</h2>
                            <div class="huongdan">
                                <div class="row"><i class="fas fa-tint col-md-1"></i><span class="col-md-11">Để vào ấm từ 150 - 200ml, nước sôi nhiệt độ 85'C</span></div>
                                <div class="row"><i class="fas fa-utensil-spoon col-md-1"></i><span class="col-md-11">1 - 2 nắm trà, khoảng 20 - 30 gram</span></div>
                                <div class="row"><i class="fas fa-clock col-md-1"></i><span class="col-md-11">Để trà 4 - 6 phút</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-md-7">
                        <img src="/frontend/images/chitietsanpham/phatra.jpg">
                    </div>
                </div>

                <!------------------- main-bottom ---------------------->

                <div class="main-chitietsanpham-bottom">
                    <div class="sanphamnoibat">
                        <div class="background-sanphamnoibat d-flex justify-content-end">
                            <div class="sanphamnoibat-la">&ensp;</div>
                        </div>
                        <h2>Sản phẩm liên quan</h2>
                        <?php
                            $checkSPLQ=10;
                        ?>
                        <div class="allsanphamnoibat d-flex justify-content-between sliderSP">
                            @if((count($biendata[1])>1) && $checkSPLQ!=0 )
                                @foreach($biendata[1] as $bien)
                                    @if($bien->id != $biendata[0]->id)
                                        <div class=col-md-12">
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
                                            <img src="{{asset($bien->image)}}">
                                            <div class="ten"><h4>{{$bien->ten}}</h4></div>
                                            <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                                <div class="main-sanpham-right-chitiet-gia">{{$bien->gia}}<span>VNĐ</span></div>
                                                <div class="main-sanpham-right-chitiet-luong">
                                                    <?php
                                                        $khoiLuong_array=explode(',', $bien->idKhoiLuong);
                                                    ?>
                                                        <select name="trongluong">
                                                            @foreach($khoiLuong_array as $khoiLuong)
                                                                @foreach($biendata[4] as $bien_khoiluong)
                                                                    @if($bien_khoiluong->id==$khoiLuong)
                                                                        <option selected="" value="{{$bien_khoiluong->khoiLuong}}">
                                                                            {{$bien_khoiluong->khoiLuong}}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <?php
                                            $checkSPLQ--;
                                            $idtrung[]=$bien->id;
                                        ?>
                                    @endif
                                    @if($checkSPLQ==0)
                                        @break;
                                    @endif
                                @endforeach
                            @endif
                            @if(count($biendata[2])>1&&$checkSPLQ!=0)
                                @foreach($biendata[2] as $bien)
                                    @if($bien->id!=$biendata[0]->id)
                                        <div class=col-md-12">
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
                                                <img src="{{asset($bien->image)}}">
                                                <div class="ten"><h4>{{$bien->ten}}</h4></div>
                                                <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                                    <div class="main-sanpham-right-chitiet-gia">{{$bien->gia}}<span>VNĐ</span></div>
                                                    <div class="main-sanpham-right-chitiet-luong">
                                                        <?php
                                                        $khoiLuong_array=explode(',', $bien->idKhoiLuong);
                                                        ?>
                                                        <select name="trongluong">
                                                            @foreach($khoiLuong_array as $khoiLuong)
                                                                @foreach($biendata[4] as $bien_khoiluong)
                                                                    @if($bien_khoiluong->id==$khoiLuong)
                                                                        <option selected="" value="{{$bien_khoiluong->khoiLuong}}">
                                                                            {{$bien_khoiluong->khoiLuong}}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $checkSPLQ--;
                                        ?>
                                        @if($checkSPLQ==0)
                                            @break;
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                            @if($checkSPLQ!=0)
                                @foreach($biendata[3] as $bien)

                                    @if(($bien->idHang!=$biendata[0]->idHang)&&($bien->idLoai!=$biendata[0]->idLoai))
                                        <div class=col-md-12">
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
                                                <img src="{{asset($bien->image)}}">
                                                <div class="ten"><h4>{{$bien->ten}}</h4></div>
                                                <div class="main-sanpham-right-chitiet-bottom d-flex justify-content-around">
                                                    <div class="main-sanpham-right-chitiet-gia">{{$bien->gia}}<span>VNĐ</span></div>
                                                    <div class="main-sanpham-right-chitiet-luong">
                                                        <?php
                                                        $khoiLuong_array=explode(',', $bien->idKhoiLuong);
                                                        ?>
                                                        <select name="trongluong">
                                                            @foreach($khoiLuong_array as $khoiLuong)
                                                                @foreach($biendata[4] as $bien_khoiluong)
                                                                    @if($bien_khoiluong->id==$khoiLuong)
                                                                        <option selected="" value="{{$bien_khoiluong->khoiLuong}}">
                                                                            {{$bien_khoiluong->khoiLuong}}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $checkSPLQ--;
                                        ?>
                                        @if($checkSPLQ==0)
                                            @break;
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        </div>
                            <script type="text/javascript">
                                $('.sliderSP').slick({
                                    lazyLoad: 'ondemand',
                                    slidesToShow: 4,
                                    slidesToScroll: 1
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
