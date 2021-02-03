<?php

namespace App\Http\Controllers;

use App\GioiThieu;
use App\NgheNhan;
use App\SanPham;
use App\ThuongHieu;
use App\KhoiLuong;
use App\DanhMuc;
use App\TinTuc;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class FrontendController extends Controller
{
    public function demo()
    {
        return view('frontend.demo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=0;$j=0;
        $data[0] = SanPham::latest()->get();
        foreach ($data[0] as $dt){
            if($dt->hot==1){
                $data[3][$i++] = $dt;
            } else{
                $data[2][$j++] = $dt;
            }
        }
        $data[1] = NgheNhan::where('trangThai',1)->get();
        return view('frontend.index',['biendata'=>$data]);
    }

    public function detailproduct($id)
    {
        $data[0] = SanPham::find($id);
        $data[1] = SanPham::where('idLoai',$data[0]->idLoai)->get();
        $data[2] = SanPham::where('idHang',$data[0]->idHang)->get();
        $data[3] = SanPham::all();
        $data[4] = KhoiLuong::all();
        return view('frontend.detailproduct',['biendata' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    ---------------------------------------- Tin Tức ----------------------------------------
    public function news($id=null)
    {
        if ($id == null){
            $data = TinTuc::latest()->paginate(9);  //paginate: PHÂN TRANG
            return view('frontend.news', ['biendata' => $data]);
        } else{
            $dataTinTuc = TinTuc::all();
            $data = TinTuc::find($id);  //paginate: PHÂN TRANG
            return view('frontend.showNews', ['biendata' => $data],['biendataTinTuc' => $dataTinTuc]);
        }
    }

//    ---------------------------------------- Giới Thiệu ----------------------------------------
    public function introduce(Request $request)
    {
        $data = GioiThieu::where('trangThai',1)->get();  //paginate: PHÂN TRANG
        return view('frontend.introduce', ['biendata' => $data]);
    }

//    ---------------------------------------- Liên Hệ --------------------------------------------
    public function contact(Request $request)
    {
        $data = GioiThieu::where('trangThai',1)->get();  //paginate: PHÂN TRANG
        return view('frontend.contact', ['biendata' => $data]);
    }

//    ---------------------------------------- Sản Phẩm --------------------------------------------
    public function product()
    {
        $data_array[0] = ThuongHieu::all();
        $data_array[1] = DanhMuc::all();
        $data_array[2] = SanPham::latest()->paginate(9);
        $data_array[3] = KhoiLuong::all();
        return view('frontend.product',['biendata_array'=>$data_array]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNews($id)
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
        //
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
