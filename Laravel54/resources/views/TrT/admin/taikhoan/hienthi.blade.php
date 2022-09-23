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
		<a> <span class="list-sp-product">  Danh sách Tài khoản</span></a>
		<br><br>
    </div>
    <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
			<tr>
				<th id="id"class="th-table" style="width:140px;">Tài khoản</th>				
				<th id="ten"class="th-table" style="width: 600px;">Mat khau</th>
				<th id="diachi"class="th-table" >Ma NV</th>				
			
				<th id="xoa"class="th-table" style="width:30px;">Xóa</th>
				<th id="themtk"class="th-table" >Them tai khoan</th>
				
			</tr>
        </thead>
        <tbody>
		@foreach($tai_khoan as $tk)
				<tr>
					<td>{{ $tk->id}}</td>	
					<td>{{$tk->mat_khau}}</td>
					<td>{{$tk->ma_nv}}</td>
					
					<td><a href="/Laravel54/public/TrT/admin/taikhoan/xoa/{{$tk->id}}">Xóa</a></td>
					<td><a href="/Laravel54/public/TrT/admin/taikhoan/themtk/{{$tk->ma_nv}}">Them tai khoan</a></td>
				</tr>
			@endforeach
        </tbody>
    </table>
</div>


@endsection