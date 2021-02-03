<?php

namespace App\Http\Controllers;

use App\NgheNhan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NgheNhan::latest()->paginate(2);  //paginate: PHÂN TRANG
        return view('admin.artist.index', ['biendata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new NgheNhan();
        $data->tenNgheNhan = $request->input('tenNgheNhan'); //nhận nhập tên loại trong input
        if ($request->hasFile('image')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $file = $request->file('image');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/anh/';
            $request->file('image')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;

        }
        $data->slug = Str::slug($request->input('tenNgheNhan')); //nhận nhập tên loại trong input
        $data->moTa = $request->input('moTa'); //nhận nhập tên loại trong input
        //$data->ten_img = $request->input('image'); //nhận nhập tên loại trong input
        $trangThai = 0;
        if ($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.artist.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NgheNhan  $ngheNhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NgheNhan  $ngheNhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = NgheNhan::find($id);
        return view('admin.artist.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NgheNhan  $ngheNhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = NgheNhan::find($id);
        $data->tenNgheNhan = $request->input('tenNgheNhan');
        if($request->hasFile('image_new')){
            @unlink(public_path($data->image));
            $file = $request->file('image_new');
            $ten_image = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'upload/news/';
            $request->file('image_new')->move($path_upload, $ten_image);
            $data->image = $path_upload . $ten_image;
        }
        $data->moTa = $request->input('moTa');
        $trangThai=0;
        $data->slug = Str::slug($request->input('tenNgheNhan'));
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect('admin/artist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NgheNhan  $ngheNhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NgheNhan $ngheNhan)
    {
        //
    }
}
