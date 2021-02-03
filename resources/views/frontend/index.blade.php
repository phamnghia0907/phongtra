@extends('frontend.layout.main')
@section('content')
    <nav class="banner-home">
        <div class="banner-home-anh">
            <div class="mySlide-banner effect" style="background-image: url(../frontend/images/trang-chu/backBanner.png)">
                <div class="banner-home-anh-tongquat">
                    <h3>TRÀ ƯỚP SEN TÂY HỒ</h3>
                    <h2>Tinh hoa ẩm thực</h2>
                    <div>Sự hòa quyện tuyệt vời giữa hương thơm ngan ngát của sen Bách diệp Hồ Tây và vị đậm đà của trà Tân Cương.</div>
                    <a href="#">THỬ NGAY</a>
                </div>
            </div>
            <div class="mySlide-banner effect" style="background-image: url(../frontend/images/trang-chu/gioithieu.png)">
                <div class="banner-home-anh-tongquat">
                    <h3>TRÀ ƯỚP SEN TÂY</h3>
                    <h2>Tinh hoa ẩm thực</h2>
                    <div>Sự hòa quyện tuyệt vời giữa hương thơm ngan ngát của sen Bách diệp Hồ Tây và vị đậm đà của trà Tân Cương.</div>
                    <a href="#">THỬ NGAY</a>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="banner-home-button">
            <span class="button" onclick="currentSlide(1)"></span>
            <span class="button" onclick="currentSlide(2)"></span>
        </div>
    </nav>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlide-banner");
            var buttons = document.getElementsByClassName("button");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < buttons.length; i++) {
                buttons[i].className = buttons[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            buttons[slideIndex-1].className += " active";
        }
    </script>
    <!------------------ main ---------------------->
    <article>
        <?php
        $checkSP=10;
        $sliderSP=1;
        $checkNT=0;
        ?>
        <div class="sanphamnoibat">
            <div class="background-sanphamnoibat d-flex justify-content-end">
                <div class="sanphamnoibat-la">&ensp;</div>
            </div>
            <h2>SẢN PHẨM NỔI BẬT</h2>
            <div class="allsanphamnoibat d-flex justify-content-between <?php if (count($biendata[0])>=4) echo "sliderSP"; ?>">
                @if(count($biendata[2])>0)
                    @foreach($biendata[2] as $bien)
                        <div class="<?php if (count($biendata[0])>=4) echo "col-md-12"; ?>">
                            <div class="tungsanphamnoibat">
                                <img src="{{asset($bien->image)}}">
                                <div>{{$bien->ten}}</div>
                            </div>
                        </div>
                        <?php
                            $checkSP--;
                        ?>
                        @if($checkSP==0)
                            @break
                        @endif
                    @endforeach
                @endif
                @if((count($biendata[2])==0)||$checkSP!=0)
                    @foreach($biendata[3] as $bien)
                        <div class="<?php if (count($biendata[0])>=4) echo "col-md-12"; ?>">
                            <div class="tungsanphamnoibat">
                                <img src="{{asset($bien->image)}}">
                                <div>{{$bien->ten}}</div>
                            </div>
                        </div>
                        <?php
                            $checkSP--;
                        ?>
                        @if($checkSP==0)
                            @break
                        @endif
                    @endforeach
                @endif

            </div>
            @if($sliderSP==1)
                <script type="text/javascript">
                    $('.sliderSP').slick({
                        lazyLoad: 'ondemand',
                        slidesToShow: 4,
                        slidesToScroll: 1
                    });
                </script>
            @endif
        </div>

        <div class="gioithieu">
            <h2>GIỚI THIỆU</h2>
            <div class="gioithieu-tongquat">
                <h2>Trà sen Bách Diệp</h2>
                <div>Trà ướp Sen Bách Diệp - tinh hoa văn hóa Hà Thành là sự hòa quyện tuyệt vời giữa hương thơm ngan ngát của bông sen Bách diệp Hồ Tây và vị đậm đà của trà <br>Tân Cương Thái Nguyên. Qua đôi bàn tay tài hoa và bí quyết nghề mật truyền nhiều đời của người thợ trà Thăng Long, tạo ra thức quà tinh túy, kết tinh văn hóa ngàn năm Thăng Long – Hà Nội.</div>
                <a href="#">ĐỌC THÊM</a>
            </div>
        </div>

        <div class="nghenhantradao">
            <h2>NGHỆ NHÂN TRÀ ĐÀO</h2>
            <div class="allnghenhantradao d-flex justify-content-between sliderNT">
                @if(count($biendata[1])==0)
                    <div class="tungnghenhantradao">
                        <h5>Không có nghệ nhân nào</h5>
                    </div>
                @endif
                @if(count($biendata[1])>0 && count($biendata[1])<=5)

                    @foreach($biendata[1] as $bien)
                            <div class="tungnghenhantradao" style="width: 19%">
                                <img src="{{asset($bien->image)}}">
                                <h5>{{$bien->tenNgheNhan}}</h5>
                                <div>{{$bien->moTa}}</div>
                            </div>
                    @endforeach
                @endif
                @if(count($biendata[1])>5)
                    @foreach($biendata[1] as $bien)
                        <div class="col-md-12">
                            <div class="tungnghenhantradao">
                                <img src="{{asset($bien->image)}}">
                                <h5>{{$bien->tenNgheNhan}}</h5>
                                <div>{{$bien->moTa}}</div>
                            </div>
                        </div>
                    @endforeach

                    <?php
                        $checkNT=1;
                    ?>
                @endif
            </div>

            @if($checkNT==1)
                <script type="text/javascript">
                    $('.sliderNT').slick({
                        lazyLoad: 'ondemand',
                        slidesToShow: 4,
                        slidesToScroll: 1
                    });
                </script>
            @endif
        </div>

        <div class="muangay">
            <h2 class="col-md-12">MUA NGAY</h2>
            <div class="form-muangay d-flex justify-content-center">
                <input type="text" name="sdt" placeholder="Số điện thoại/Email">&emsp;&emsp;
                <input type="submit" name="mua" value="GỬI">
            </div>
        </div>
    </article>
@endsection
