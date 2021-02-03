@extends('frontend.layout.main')
@section('content')
    <article>
        <div class="main-tintuc">
            <h3>TIN TỨC</h3>
            <div class="main-tintuc-tongquat">
                <div class="tintuc-tongquat">
                @foreach($biendata as $bien)
                        <div class="main-tintuc-chitiet col-md-6 col-lg-4">
                            <a href="{{route('news',[$bien->id])}}"><img style="width: 100%;" src="{{asset($bien->image)}}"></a>
                            <h4><a href="{{route('news',[$bien->id])}}">{{$bien->tenTinTuc}}</a></h4>
                            <div>{{$bien->moTaNgan}}</div>
                        </div>
                @endforeach
                </div>
            </div>
            <div class="main-botton-trang d-flex justify-content-center">
                <ul>
                    {{$biendata->links()}}
                </ul>
            </div>
        </div>
    </article>
@endsection
