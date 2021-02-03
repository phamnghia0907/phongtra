<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use App\KhoiLuong;
use App\SanPham;
use App\ThuongHieu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SanPham::latest()->paginate(10);  //paginate: PHÂN TRANG

        return view('admin.product.index',['biendata'=>$data,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keywork = $request->input('keyWork');
        $slug = Str::slug($keywork);
        $category = category::where([
            ['name','like','%'.$keywork.'%'],
            ['is_active','=',1]
        ])->orWhere([
            ['slug','like','%'.$slug.'%'],
        ])->paginate(5);
        //  Model //

        return view('admin.category.search',['category'=>$category,'keyWork' => $keywork ? $keywork : '']);
    }
    public function create()
    {
        $data_array[0] = ThuongHieu::all();
        $data_array[1] = DanhMuc::all();
            $data_array[2] = KhoiLuong::all();
        return view('admin.product.create',['biendata_array'=>$data_array]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new SanPham();
        $data->ten = $request->input('ten'); //nhận nhập tên loại trong input
        $data->idHang = $request->input('idHang');
        $data->idLoai = $request->input('idLoai');
        $idKhoiLuong=0;
        foreach ($request->input('idKhoiLuong')as$rq){
            $idKhoiLuong=$idKhoiLuong.",".$rq;
        }
        $data->idKhoiLuong = substr($idKhoiLuong, 2);
        $data->gia = $request->input('gia'); //nhận nhập tên loại trong input
        if ($request->hasFile('image')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $file = $request->file('image');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/anh/';
            $request->file('image')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;
        }
        //$data->ten_img = $request->input('image'); //nhận nhập tên loại trong input
        $data->cachDung = $request->input('cachDung1')."@".$request->input('cachDung2')."@".$request->input('cachDung3');
        $data->slug = Str::slug($request->input('tenTinTuc')); //nhận nhập tên loại trong input
        $hot = 0;
        if ($request->has('hot')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $hot = $request->input('hot');
        }
        $data->hot = $hot;
        if ($request->has('hot')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $hot = $request->input('hot');
        }
        $data->hot = $hot;
        $data->moTaChiTiet = $request->input('moTaChiTiet'); //nhận nhập tên loại trong input
        $trangThai = 0;
        if ($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.product.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SanPham::find($id);
        //  Model //
        $data_array[0] = ThuongHieu::all();
        $data_array[1] = DanhMuc::all();
        $data_array[2] = KhoiLuong::all();
        return view('admin.product.edit',['biendata'=>$data],['biendata_array'=>$data_array]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = SanPham::find($id);
        $data->ten = $request->input('ten');
        $data->idHang = $request->input('idHang');
        $idKhoiLuong=0;
        foreach ($request->input('idKhoiLuong')as$rq){
            $idKhoiLuong=$idKhoiLuong.",".$rq;
        }
        $data->idKhoiLuong = substr($idKhoiLuong, 2);
        $data->gia = $request->input('gia');
        if($request->hasFile('image_new')){
            @unlink(public_path($data->image));
            $file = $request->file('image_new');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/news/';
            $request->file('image_new')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;
        }
        $data->cachDung = $request->input('cachDung1')."@".$request->input('cachDung2')."@".$request->input('cachDung3');
        $data->slug = Str::slug($request->input('tenTinTuc'));
        $trangThai=0;
        $hot=0;
        if($request->has('hot')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $hot = $request->input('hot');
        }
        $data->hot = $hot;
        $data->moTaChiTiet = $request->input('moTaChiTiet');
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
}
