<?php

namespace App\Http\Controllers;

use App\ThuongHieu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrademarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ThuongHieu::latest()->paginate(2);
        return view('admin.trademark.index',['biendata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trademark.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ThuongHieu();
        $data->tenHang = $request->input('tenHang');
        $data->slug = Str::slug($request->input('tenHang'));
        $trangThai=0;
        if($request->has('trangThai')){
            $trangThai=$request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.trademark.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function show(ThuongHieu $thuongHieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ThuongHieu::find($id);
        return view('admin.trademark.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ThuongHieu::find($id);
        $data->tenHang = $request->input('tenHang'); //nhận nhập tên loại trong input
        $data->slug =  Str::slug($request->input('tenHang'));
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.trademark.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThuongHieu  $thuongHieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThuongHieu $thuongHieu)
    {
        //
    }
}
