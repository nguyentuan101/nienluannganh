<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    //
	protected $table = "san_pham";
	
	public function chitiethoadon(){
		return $this->hasMany('App\chi_tiet_hd','ma_sp','ma_sp');
	}
	
	public function loaisp(){
		return $this->belongsTo('App\loai_sp','loai_sp','ma_sp');
	}
	

}
