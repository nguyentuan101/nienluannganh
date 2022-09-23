<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\san_pham;
use App\nhan_vien;
use App\tai_khoan;
use Session;
use Hash;
use Auth;


class user extends Controller
{
        public function gethienthisp(){
                $san_pham=san_pham::all();
                return view('TrT.user.hienthi',['san_pham'=>$san_pham]);
        }

        public function getindex(){
                return view('TrT.user.index');
        }

        public function getlienhe(){
                return view('TrT.user.lienhe');
        }
        
        public function getgioithieu(){
                return view('TrT.user.gioithieu');
        }

        //Dang nhap
    public function getdangnhapad(){
        return view('TrT.user.dangnhapad');
    }


}