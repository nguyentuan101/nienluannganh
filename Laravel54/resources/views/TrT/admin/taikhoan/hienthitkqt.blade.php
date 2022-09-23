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
	
    <h2>  Danh sách Tài khoản</h2>   
    <table class="shop_table beta-shopping-cart-table" cellspacing="0">
		<thead>
			<tr>
				<th id="id">Tai khoan</th>				
				<th id="ten">Mat khau</th>
			
				<th id="xoa">Xóa</th>
				<th id="themtk">Them tai khoan</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($quan_tri as $nv)
				<tr>
					<td>{{ $nv->tai_khoan}}</td>	
					<td>{{$nv->mat_khau}}</td>
					
					<td><a href="/Laravel54/public/TrT/admin/taikhoan/xoatkqt/{{$nv->tai_khoan}}">Xóa</a></td>
					<td><a href="/Laravel54/public/TrT/admin/taikhoan/themtkqt">Them tai khoan</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection