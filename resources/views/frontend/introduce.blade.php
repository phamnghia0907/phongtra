@extends('frontend.layout.main')
@section('content')
    <!------------------ banner ---------------------->
    <nav class="banner-gioithieu">
        <div class="banner-gioithieu-conten">
            <h3>TRÀ SEN</h3>
            <div>BÁCH HIỆP</div>
        </div>
    </nav>

    <!------------------ main ---------------------->
    <article>
        <div class="main-gioithieu">
            <div class="main-gioithieu-tongquat col-sm-10">
                <h3>GIỚI THIỆU</h3>
                {!! $biendata[0]->noiDung !!}
            </div>
        </div>
    </article>
@endsection
