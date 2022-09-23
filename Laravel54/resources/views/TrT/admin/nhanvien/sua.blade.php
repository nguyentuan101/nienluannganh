@extends('TrT.admin.master')
@section('nd')

<link href="/Laravel54/public/adminT/css/sua.css" rel="stylesheet" />
<link href="/Laravel54/public/adminT/css/them.css" rel="stylesheet" />

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

	<h4>Sửa nhân viên</h4>
	<form action="/Laravel54/public/TrT/admin/nhanvien/sua/{{$nhan_vien->id}}" method="POST"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}" />

			<div class="form-block">
				<label>Tên nhân viên</label>
				<input type="text" name="ten_nv" value="{{$nhan_vien->ten_nv}}" required>
				<span>{{$nhan_vien->ten_nv}}</span>
			</div>
			
			<div class="form-block">
				<label>Địa chỉ</label>
				<input type="text" name="dia_chi" value="{{$nhan_vien->dia_chi}}" required>
				<span>{{$nhan_vien->dia_chi}}</span>
			</div>

			<div class="form-block">
				<label>Số điện thoại</label>
				<input type="text" name="sdt" value="{{$nhan_vien->sdt}}" required>
				<span>{{$nhan_vien->sdt}}</span>
			</div>
		
			<div class="form-block">
				<button type="submit" class="btn btn-primary">Sửa</button>
			</div>

			<div class="form-block">
				<button type="reset" class="btn btn-primary">Làm mới</button>
				<a href="/Laravel54/public/TrT/admin/nhanvien/hienthi">Trở lại</a>
			</div>
	</form>	
</div>

@endsection