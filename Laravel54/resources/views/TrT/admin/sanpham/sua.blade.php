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

	<div class="list-product">
        <a> <span class="list-sp-product">Sửa sản phẩm</span></a>
        <br><br>
    </div>
	
	<form action="/Laravel54/public/TrT/admin/sanpham/sua/{{$san_pham->id}}" method="POST"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}" />

			<div class="form-block">
				<label>Tên sản phẩm</label>
				<input type="text" name="ten_sp" value="{{$san_pham->ten_sp}}" required>
				<span>{{$san_pham->ten_sp}}</span>
			</div>

			<div class="form-block">
				<label>Giá sản phẩm</label>
				<input type="text" name="gia" value="{{$san_pham->gia}}" required>
				<span>{{$san_pham->gia}}</span>
			</div>
			
			<div class="form-block">
				<label>Loại sản phẩm</label>
				<input type="text" name="loai_sp" value="{{$san_pham->loai_sp}}" required>
				<span>{{$san_pham->loai_sp}}</span>
			</div>

			<div class="form-block">
				<label>Nhà sản xuất</label>
				<input type="text" name="nsx" value="{{$san_pham->nsx}}" required>
				<span>{{$san_pham->nsx}}</span>
			</div>

			<div class="form-block">
				<button type="submit" class="btn btn-primary">Sửa</button>
			</div>

			<div class="form-block">
				<button type="reset" class="btn btn-primary">Làm mới</button>
				<a href="/Laravel54/public/TrT/admin/sanpham/hienthi">Trở lại</a>

			</div>
	</form>	
</div>

@endsection