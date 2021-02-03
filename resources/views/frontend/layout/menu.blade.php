<div class="col-md-7">
    <div class="menu-thunho" id="main">
        <button href="#main-nav" class="open-menu" onclick="openMenu()">
            ☰
        </button>
    </div>
    <div class="menu-thunhochitiet" id="mySidebar"> <!-- sidebar=menu-thunhochitiet -->
        <a href="javascript:void(0)" class="close-menu" onclick="closeMenu()">
            +
        </a>
        <ul class="d-flex justify-content-between">
            <li><a class="selected" href="{{route('web')}}">TRANG CHỦ</a></li>
            <li><a href="{{route('introduce')}}">GIỚI THIỆU</a></li>
            <li><a href="{{route('product')}}">SẢN PHẨM</a></li>
            <li><a href="{{route('news')}}">TIN TỨC</a></li>
            <li><a href="{{route('contact')}}">LIÊN HỆ</a></li>
        </ul>
    </div>
</div>
