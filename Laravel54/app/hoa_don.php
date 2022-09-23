<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoa_don extends Model
{
    //
	protected $table = "hoa_don";
		
	public function chitiethoadon(){
		return $this->hasMany('App\chi_tiet_hd','so_hd','so_hd');
	}	
	
	public function nhanvien(){
		return $this->belongsTo('App\nhan_vien','nguoi_lap','so_hd');
	} 
}
