<?php

namespace App\Http\Controllers;

use App\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data=UserAmin::find($id);
        $data=UserAdmin::find($id=1);
        return view('admin.user.index',['biendata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserAdmin  $userAdmin
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
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nameAdmin'=> 'required',
            'passNow'=> 'required',
        ]);
        $data = UserAdmin::find($id);
        if($request->has('passNow')){
            $request->validate([
                'passNow'=> 'required',
                'passNew' => 'bail|required|min:8',
                'againPassNew' => 'required|same:passNew',
                //'image' => 'required|image|mimes:jpg,png,gif|max:255',
            ],[
                'passNow.required'=>'Mật khẩu không được để trống', //Nội dung cần in ra thông báo
                'passNew.required'=>'Mật khẩu mới không được để trống',
                'passNew.min'=>'Mật khẩu mới không được dưới 8 ký tự',
                'againPassNew.same'=>'Xác nhận mật khẩu mới không khớp',
            ]);
        } else{
            $data->nameAdmin = $request->input('nameAdmin');
            $data->number = $request->input('number');
            $data->email = $request->input('email');
            $data->url = $request->input('url');
            $data->save();
        }
        return redirect()->back()->with('alert','thong bao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
