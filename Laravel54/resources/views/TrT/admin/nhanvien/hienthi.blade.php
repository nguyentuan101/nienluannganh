@extends('TrT.admin.master')
@section('nd')

<link href="/Laravel54/public/adminT/css/hienthi.css" rel="stylesheet" />

<div class="nd">
@if(count($errors)>0) 
		<div class="alert alert-danger">
		@foreach($errors->all() as $err)
			{{$err}}<br>
		@endforeach		
		</div>
	@endif
	@if(session('thongbao'))
		<div class="alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif

    <div class="list-product">
		<a> <span class="list-sp-product">Danh sách nhân viên</span></a>
		<br><br>
	</div>
	
    <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
            <tr>
               		
				<th id="ten"class="th-table" style="width:200px;">Tên nhân viên</th>
				<th id="diachi"class="th-table" style="width:450px;">Địa chỉ</th>
				<th id="sdt"class="th-table" style="width:130px;">Sđt</th>
			
				<th id="xoa"class="th-table">Xóa</th>
				<th id="sua"class="th-table">Sửa</th>
				<th id="themtk"class="th-table">Them tai khoan</th>
            </tr>
        </thead>
        <tbody>
		@foreach($nhan_vien as $nv)
				<tr>
					
					<td>{{$nv->ten_nv}}</td>
					<td>{{$nv->dia_chi}}</td>
					<td>{{$nv->sdt}}</td>
					<td><a href="/Laravel54/public/TrT/admin/nhanvien/xoa/{{$nv->id}}">Xóa</a></td>
					<td><a href="/Laravel54/public/TrT/admin/nhanvien/sua/{{$nv->id}}">Sửa</a></td>
					<td><a href="/Laravel54/public/TrT/admin/taikhoan/themtk/{{$nv->id}}">Them tai khoan</a></td>
				</tr>
			@endforeach
        </tbody>
    </table>
</div>

@endsection