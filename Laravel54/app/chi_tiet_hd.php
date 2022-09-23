<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chi_tiet_hd extends Model
{
    //
	protected $table = "chi_tiet_hd";
	
	public function sanpham(){
		return $this->belongsTo('App\san_pham','id','ma_sp');
	}
	
	public function hoadon(){
		return $this->belongsTo('App\hoa_don','id','so_hd');
	} 
}
