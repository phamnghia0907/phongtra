<?php

namespace App\Http\Controllers;

use App\LienHe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LienHe::latest()->paginate(10);  //paginate: PHÂN TRANG
        return view('admin.contact.index',['biendata'=>$data]);
    }
    public function home($id=null)
    {
        if($id==null){
            $data = LienHe::latest()->paginate(10);  //paginate: PHÂN TRANG
        }
        else
            $data = LienHe::where('trangThai',$id)->latest()->paginate(10);
        return view('admin.contact.index',['biendata'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new LienHe();
        $data->hoTen = $request->input('hoTen'); //nhận nhập tên loại trong input
        $data->soDienThoai = $request->input('soDienThoai'); //nhận nhập tên loại trong input
        $data->email = $request->input('email'); //nhận nhập tên loại trong input
        $data->noiDung = $request->input('noiDung'); //nhận nhập tên loại trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('contact.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LienHe::find($id);
        //  Model //

        return view('admin.contact.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = LienHe::find($id);
        $data->hoTen = $request->input('hoTen'); //nhận nhập tên loại trong input
        $data->soDienThoai =  $request->input('soDienThoai');
        $data->email = $request->input('email'); //nhận nhập vị trí trong input
        $data->noiDung = $request->input('noiDung'); //nhận nhập vị trí trong input
        $trangThai=0;
        if($request->has('trangThai')) //has(name-input) //has-kiểm tra tồn tại hay ko
        {
            $trangThai = $request->input('trangThai');
        }
        $data->trangThai = $trangThai;
        $data->save();
        return redirect()->route('admin.contact.index'); //điều hướng đến foder category - flie index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function destroy(LienHe $lienHe)
    {
        //
    }
}
