<?php

namespace App\Http\Controllers;

use App\GioiThieu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IntroduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GioiThieu::latest()->paginate(10);
        return view('admin.introduce.index',['biendata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.introduce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $get_data = GioiThieu::all();
        $data = new GioiThieu();
        $data->noiDung = $request->input('noiDung');
        $trangThai=0;
        if($request->has('trangThai')){
            foreach ($get_data as $get){
                if($get->trangThai==1){
                    $get->trangThai=0;
                    $get->save();
                }
            }
            $trangThai=$request->input('trangThai');
        }
        $data->trangThai=$trangThai;
        $data->save();
        return redirect()->route('admin.introduce.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GioiThieu::find($id);
        return view('admin.introduce.edit',['biendata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $get_data = GioiThieu::all();
        $data = GioiThieu::find($id);
        $data->noiDung = $request->input('noiDung');
        $trangThai=0;
        if($request->has('trangThai')){
            foreach ($get_data as $get){
                if($get->trangThai==1){
                    $get->trangThai=0;
                    $get->save();
                }
            }
            $trangThai=$request->input('trangThai');
        }
        $data->trangThai=$trangThai;
        $data->save();
        return redirect()->route('admin.introduce.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
