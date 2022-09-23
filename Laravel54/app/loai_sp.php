<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_sp extends Model
{
    //
	protected $table = "loai_sp";
	
	public function sanpham(){
		return $this->hasMany('App\san_pham','ma_nsx','ma_nsx');
	}
	
	
}
