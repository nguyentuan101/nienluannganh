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

	<h4>Sửa Tài khoản</h4>
	<form action="/Laravel54/public/TrT/admin/taikhoan/sua/{{$tai_khoan->tai_khoan}}" method="POST"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}" />

			<div class="form-block">
				<label>Tài khoản: {{$tai_khoan->tai_khoan}}</label>
			</div>
			
			<div class="form-block">
				<label>Mật khẩu mới</label>
				<input type="text" name="mat_khau" required>
			</div>
		
			<div class="form-block">
				<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
			</div>

			<div class="form-block">
				<button type="reset" class="btn btn-primary">Làm mới</button>
				<a href="/Laravel54/public/TrT/admin/taikhoan/hienthi">Trở lại</a>
			</div>
	</form>	
</div>

@endsection