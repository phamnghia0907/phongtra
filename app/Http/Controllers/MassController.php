<?php

namespace App\Http\Controllers;

use App\KhoiLuong;
use Illuminate\Http\Request;

class MassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KhoiLuong::latest()->paginate(10);  //paginate: PHÂN TRANG
        return view('admin.mass.index',['biendata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = KhoiLuong::all();
        $count = 0;
        $data = new KhoiLuong();
        $data->khoiLuong = $request->input('khoiLuong'); //nhận nhập khoiLuong trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        foreach ($check as $ch){
            if($data->khoiLuong == $ch->khoiLuong){
                $count++;
            }
        }
        if($count==0){
            $data->save();
            return redirect()->route('admin.mass.index')->with('alert','thong bao'); //điều hướng đến foder category - flie index
        }
        else
            return redirect()->route('admin.mass.create')->with('alert','thong bao');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KhoiLuong  $khoiLuong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KhoiLuong  $khoiLuong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KhoiLuong::find($id);
        //  Model //

        return view('admin.mass.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KhoiLuong  $khoiLuong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KhoiLuong::find($id);
        $data->khoiLuong = $request->input('khoiLuong'); //nhận nhập khoiLuong trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.mass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KhoiLuong  $khoiLuong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
