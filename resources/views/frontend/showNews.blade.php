@extends('frontend.layout.main')
@section('content')
    <article>
        <div class="main-baiviet">
            <div class="main-baivet-tongquat ">
                <div class="title ">
                    <a href="#">Trang chủ&ensp;</a>><a href="#">&ensp;Tin tức</a>
                </div>
                <div class="layout d-flex justify-content-between">
                    <div class="left">
                        <h1>{{$biendata->tenTinTuc}}</h1>
                        {!!$biendata->moTaChiTiet!!}
                    </div>
                    <div class="right">
                        <h2>BÀI VIẾT MỚI</h2>
                        <?php
                            $dem=3;
                        ?>
                        <div class="tongquat">
                            @foreach($biendataTinTuc as $bien)
                                @if($bien->id!=$biendata->id)
                                    <div class="chitietbaiviet">
                                        <a href="{{route('news')}}/{{$bien->id}}"><img src="{{asset($bien->image)}}"></a>
                                        <h3><a href="{{route('news')}}/{{$bien->id}}">{{$bien->tenTinTuc}}</a></h3>
                                    </div>
                                    <?php
                                    $dem--;
                                    ?>
                                @endif
                                @if($dem==0)
                                    @break
                                    @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
