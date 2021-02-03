<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMuc;
use Illuminate\Support\Str;

    class CategoriesController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DanhMuc::latest()->paginate(10);  //paginate: PHÂN TRANG
        return view('admin.category.index',['biendata'=>$data]);
    }
    public function search(Request $request)
    {
        $keywork = $request->input('keyWork');
        $slug = $Str::slug($keywork);
        $category = category::where([
            ['name','like','%'.$keywork.'%'],
            ['is_active','=',1]
        ])->orWhere([
            ['slug','like','%'.$slug.'%'],
        ])->paginate(5);
        //  Model //

        return view('admin.category.search',['category'=>$category,'keyWork' => $keywork ? $keywork : '']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tenLoai'=> 'required',
            //'image' => 'required|image|mimes:jpg,png,gif|max:255',
        ],[
            'tenLoai.required'=>'tên loại không được để trống', //Nội dung cần in ra thông báo
        ]);
        $data = new DanhMuc();
        $data->tenLoai = $request->input('tenLoai'); //nhận nhập tên loại trong input
        $data->slug =  Str::slug($request->input('tenLoai'));
        $data->viTri = $request->input('viTri'); //nhận nhập vị trí trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.category.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DanhMuc::find($id);
            //  Model //
        return view('admin.category.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = DanhMuc::find($id);
        $data->tenLoai = $request->input('tenLoai'); //nhận nhập tên loại trong input
        $data->slug =  Str::slug($request->input('tenLoai'));
        $data->viTri = $request->input('viTri'); //nhận nhập vị trí trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.category.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
