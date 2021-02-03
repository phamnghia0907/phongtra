@extends('frontend.layout.main')
@section('content')
    <article>
        <div class="main-lienhe">
            <div class="main-lienhe-tongquat d-flex justify-content-end">
                <div class="main-lienhe-form">
                    <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                    <div>
                        <form>
                            <input type="text" name="fullname" placeholder="Họ tên">
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="number" placeholder="Số điện thoại" pattern="[0-9]">
                            <input type="text" name="content" placeholder="Nội dung">
                            <input type="submit" name="lienhe" value="GỬI">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
