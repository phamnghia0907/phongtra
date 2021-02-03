<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table = 'product';
    public function category(){
        return $this->belongsTo('App\DanhMuc','idLoai');
    }
    public function mass(){
        return $this->belongsTo('App\KhoiLuong');//Model;
    }
    public function trademark(){
        return $this->belongsTo('App\ThuongHieu','idHang');//Model;
    }
}
