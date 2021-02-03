<?php

namespace App\Http\Controllers;

use App\NoiDungBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NoiDungBanner::latest()->paginate(10);  //paginate: PHÂN TRANG
        return view('admin.contentBanner.index',['biendata'=>$data]);
    }

    /*public function search(Request $request)
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

        return view('admin.contentBanner.search',['category'=>$category,'keyWork' => $keywork ? $keywork : '']);
    }*/


    public function create()
    {
        return view('admin.contentBanner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenContent'=> 'required',
            'content'=> 'required',
            //'image' => 'required|image|mimes:jpg,png,gif|max:255',
        ],[
            'tenContent.required'=>'tên nội dung không được để trống', //Nội dung cần in ra thông báo
            'content.required'=>'nội dung không được để trống',
        ]);
        $data = new NoiDungBanner();
        $data->tenContent = $request->input('tenContent'); //nhận nhập tên loại trong input
        $data->content = $request->input('content');
        $data->viTri = $request->input('viTri');
        $data->slug = Str::slug($request->input('tenContent'));
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.contentBanner.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NoiDungBanner  $noiDungBanner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NoiDungBanner  $noiDungBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NoiDungBanner  $noiDungBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NoiDungBanner  $noiDungBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
