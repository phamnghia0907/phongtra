 <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="Brand-Logo">
      <div class="logo-admin">
        <a href="#">
          <img src="/backend/images/trang-chu/logo.png">
        </a>
        <div>
          <p><span>ADMIN TRÀ SEN</span></p>
          <p>BÁCH DIỆP</p>
        </div>
      </div>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item active">
            <a href="{{route('admin.user.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tài Khoản
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Trang Chủ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.contentBanner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nội Dung Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.artist.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nghệ Nhân</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.introduce.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Giới Thiệu
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-leaf"></i>
                    <p>
                        Sản Phẩm
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.trademark.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thương Hiệu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Các Loại</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.mass.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Khối Lượng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.product.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sản Phẩm</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item">
            <a href="{{route('admin.news.index')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Tin Tức
              </p>
            </a>
          </li>
          <li class="nav-item hover">
            <a href="{{route('admin.contact.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Quản Lý Liên Hệ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav">
              <li class="nav-item">
                <a href="{{route('admin.contact.home')}}/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chưa Xử Lý</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.contact.home')}}/2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đang Xử Lý</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.contact.home')}}/3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đã Xử Lý</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{route('admin.contact.home')}}/4" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Đã Hủy</p>
                    </a>
                </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
