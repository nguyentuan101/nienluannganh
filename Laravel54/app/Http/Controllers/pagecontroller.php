<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\san_pham;
use App\nhan_vien;
use App\tai_khoan;
use App\quan_tri;
use Session;
use Hash;
use Auth;
use App\Cart;
class pagecontroller extends Controller
{
  
//Sản phẩm
    public function gethienthisp(){
        $san_pham=san_pham::all();
        return view('TrT.admin.sanpham.hienthi',['san_pham'=>$san_pham]);
    }
    public function getthemsp(){
        return view('TrT.admin.sanpham.them');
    }
    public function postthemsp(Request $request){        
        $this->validate($request,
        [
            'loai_sp'=>'required',  
            'nsx'=>'required',        
        ],
        [
            'loai_sp.required'=>'Bạn chưa nhập loại sản phẩm',   
            'nsx.required'=>'Bạn chưa nhập nsx',        
        ]);
        $san_pham= new san_pham;
        $san_pham->ten_sp=$request->ten_sp;
           $path = '/Laravel54/public/image/sanpham/';
            $name = $request->file('hinh_anh')->getClientOriginalName();
            echo $name;
            $request->file('hinh_anh')->move('image/sanpham', $name);
           
        $san_pham->hinh_anh=$name;
        $san_pham->gia=$request->gia;
        $san_pham->loai_sp=$request->loai_sp;      
        $san_pham->nsx=$request->nsx;    
        $san_pham->save();
        return redirect('TrT/admin/sanpham/them')->with('thongbao','Thêm thành công');
    }
    public function getsuasp($id){
        $san_pham=san_pham::find($id);
        return view('TrT.admin.sanpham.sua',['san_pham'=>$san_pham]);     
    }
    public function postsuasp(Request $request, $id ){      
        $san_pham=san_pham::find($id);
        $san_pham->ten_sp=$request->ten_sp;
        $san_pham->gia=$request->gia;
        $san_pham->loai_sp=$request->loai_sp;
        $san_pham->nsx=$request->nsx;        
        $san_pham->save();
        return redirect('TrT/admin/sanpham/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getxoasp($id){
        $san_pham= san_pham:: find($id);
        $san_pham->delete();
        return redirect('TrT/admin/sanpham/hienthi')->with('thongbao','Đã xóa');
    }

//Nhân viên
    public function gethienthinv(){
        $nhan_vien=nhan_vien::all();
        return view('TrT.admin.nhanvien.hienthi',['nhan_vien'=>$nhan_vien]);
    }
    public function getthemnv(){
        return view('TrT/admin/nhanvien/them');
    }
    public function postthemnv(Request $request){      
        $nhan_vien= new nhan_vien;
        $nhan_vien->ten_nv=$request->ten_nv;
        $nhan_vien->dia_chi=$request->dia_chi;
        $nhan_vien->sdt=$request->sdt;
        $nhan_vien->save();
        return redirect('TrT/admin/nhanvien/them')->with('thongbao2','Thêm thành công');
    } 
    public function getsuanv($id){
        $nhan_vien=nhan_vien::find($id);
        return view('TrT.admin.nhanvien.sua',['nhan_vien'=>$nhan_vien]);     
    }
    public function postsuanv(Request $request, $id ){      
        $nhan_vien=nhan_vien::find($id);
        $nhan_vien->ten_nv=$request->ten_nv;
        $nhan_vien->dia_chi=$request->dia_chi;
        $nhan_vien->sdt=$request->sdt;         
        $nhan_vien->save();
        return redirect('TrT/admin/nhanvien/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getxoanv($id){
        $nhan_vien= nhan_vien:: find($id);
        $nhan_vien->delete();
        return redirect('TrT/admin/nhanvien/hienthi')->with('thongbao','Đã xóa');
    }

//Tai khoan
    public function gethienthitk(){
        $tai_khoan=tai_khoan::all();
        return view('TrT.admin.taikhoan.hienthi',['tai_khoan'=>$tai_khoan]);
    }
    public function getthemtk($id){
        $nhan_vien=nhan_vien:: find($id);
        
        return view('TrT.admin.taikhoan.themtk',['nhan_vien'=>$nhan_vien]);
    }
    public function postthemtk(Request $request){        
        $this->validate($request,
        [
            'tai_khoan'=>'required',  
            'mat_khau'=>'required',        
        ],
        [
            'tai_khoan.required'=>'Bạn chưa nhập loại sản phẩm',   
            'mat_khau.required'=>'Bạn chưa nhập nsx',        
        ]);
        $tai_khoan= new tai_khoan;
        $tai_khoan->id=$request->tai_khoan;
        $tai_khoan->mat_khau=Hash::make($request->mat_khau);
        $tai_khoan->ma_nv=$request->ma_nv;     
        $id=$request->ma_nv;  
        $tai_khoan->save();
        return redirect('TrT/admin/taikhoan/themtk/'.$id)->with('thongbao','Thêm thành công');
    }   
    public function getsuatk($id){
        $tk=tai_khoan::find($id);
        return view('TrT.admin.taikhoan.sua',['tai_khoan'=>$tk]);     
    }
    public function postsuatk(Request $request, $id ){      
        $tai_khoan=tai_khoan::find($id);
        $tai_khoan->mat_khau=$request->mat_khau;          
        $tai_khoan->save();
        return redirect('TrT/admin/taikhoan/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getxoatk($id){
        $tai_khoan= tai_khoan:: find($id);
        $tai_khoan->delete();
        return redirect('TrT/admin/taikhoan/hienthi')->with('thongbao','Đã xóa');
    }


    //TK quan tri
    public function gethienthitkqt(){
        $quan_tri=quan_tri::all();
        return view('TrT.admin.taikhoan.hienthitkqt',['quan_tri'=>$quan_tri]);
    }
    public function getthemtkqt(){       
        return view('TrT.admin.taikhoan.themtkqt');
    }
    public function postthemtkqt(Request $request){        
        $this->validate($request,
        [
            'tai_khoan'=>'required',  
            'mat_khau'=>'required',        
        ],
        [
            'tai_khoan.required'=>'Bạn chưa nhập tài khoản',   
            'mat_khau.required'=>'Bạn chưa nhập mật khẩu',        
        ]);
        $quan_tri= new quan_tri;
        $quan_tri->tai_khoan=$request->tai_khoan;
        $quan_tri->mat_khau=Hash::make($request->mat_khau);     
        $quan_tri->save();
        return redirect('TrT/admin/taikhoan/themtkqt')->with('thongbao','Thêm thành công');
    }
    public function getxoatkqt($id){
        $quan_tri= quan_tri:: find($id);
        $quan_tri->delete();
        return redirect('')->with('thongbao','Đã xóa');
    }



    // public function getgiohang(){
    //     $ct= chi_tiet_hd::find(1);
    //     return view('TrT.admin.nhanvien.index',['chi_tiet_hd'=>$ct]);    
    // }


    public function postdangnhap(Request $rq){
        $rq->name;
        $rq->password;
    }
    public function getcartproduct(Request $req,$id){
        $product=san_pham::find($id); //kiểm tra có sản phẩm không  
        $old_Cart= Session('cart') ? Session::get('cart') :null; // kiếm tra có sản phẩm nào trong giỏ hàng không 
                                                                //nếu có thì gán nó bằng cái cũ còn không thì cho nó rỗng

        $cart=new Cart($old_Cart); // tạo giỏ hàng mới 
        $cart->add($product,$id); // them sản phẩm vào giỏ hàng
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }


    public function getshowcart(){
        if(session::has('cart')){
            $old_Cart=Session::get('cart');
            $cart=new Cart($old_Cart);
            $cart=session::get('cart');
            // session::forget('cart'); dong nay de xoa gio hang
            return view('TrT.user.showcart',[
                'cart'=>$cart, // cart hien tai
                'sanpham'=>$cart->items, // all bo san pham o day
                'gia'=>$cart->totalPrice,
                'soluongsp'=>$cart->totalQty
            ]);
        }
    }
}