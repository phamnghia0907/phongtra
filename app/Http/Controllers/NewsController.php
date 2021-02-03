<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TinTuc::latest()->paginate(2);  //paginate: PHÂN TRANG
        return view('admin.news.index', ['biendata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new TinTuc();
        $data->tenTinTuc = $request->input('tenTinTuc'); //nhận nhập tên loại trong input
        $data->moTaNgan = $request->input('moTaNgan'); //nhận nhập tên loại trong input
        $data->moTaChiTiet = $request->input('moTaChiTiet'); //nhận nhập tên loại trong input
        $data->slug = Str::slug($request->input('tenTinTuc')); //nhận nhập tên loại trong input
        //$data->ten_img = $request->input('image'); //nhận nhập tên loại trong input
        if ($request->hasFile('image')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $file = $request->file('image');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/anh/';
            $request->file('image')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;

        }
        $trangThai = 0;
        if ($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.news.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TinTuc::find($id);
        return view('admin.news.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = TinTuc::find($id);
        $data->tenTinTuc = $request->input('tenTinTuc');
        if($request->hasFile('image_new')){
            @unlink(public_path($data->image));
            $file = $request->file('image_new');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/news/';
            $request->file('image_new')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;
        }
        $data->moTaNgan = $request->input('moTaNgan');
        $data->moTaChiTiet = $request->input('moTaChiTiet');
        $trangThai=0;
        $data->slug = Str::slug($request->input('tenTinTuc'));
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
