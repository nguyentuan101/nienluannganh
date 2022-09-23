<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nsx extends Model
{
    //
	protected $table = "nsx";
		
	public function sanpham(){
		return $this->hasMany('App\san_pham','ma_nsx','ma_nsx');
	}
	
	
}
