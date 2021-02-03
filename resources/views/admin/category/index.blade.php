@extends('admin.layout.main')
@section('content')
	<section class="content">
      <div class="row">
        <div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="left">
                    <h3 class="card-title"><a href="">DÁNH SÁCH CÁC LOẠI SẢN PHẨM</a></h3>
                </div>
                <div class="right no-click">
                    <h3 class="card-title"><a href="{{route('admin.category.create')}}">THÊM LOẠI SẢN PHẨM</a></h3>
                </div>
                {{--<form class="form-inline ml-3" method="get" >
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>--}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>TÊN LOẠI</th>
                  <th>VỊ TRÍ</th>
                  <th>TRẠNG THÁI</th>
                  <th>EDIT</th>
                </tr>
                </thead>
                <tbody>
                	@foreach ($biendata as $key => $bien)
                <tr class="loai-{{$bien->id}} {{$bien->trangThai!=1?'trangThaiAn':''}}">
                  <td>{{$key+1}}</td>
                  <td>{{$bien->tenLoai}}</td>
                  <td>{{$bien->viTri}}</td>
                  <td>{{$bien->trangThai==1?'Hiện':'Ẩn'}}</td>
                  <td>
                      <a href="{{route('admin.category.edit',$bien->id)}}" class="fas fa-edit"></a>
                  </td>
                </tr>
                	@endforeach
                </tbody>
              </table>
            </div>
            <div class="box-trang">
{{$biendata->links()}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
