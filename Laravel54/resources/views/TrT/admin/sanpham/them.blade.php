@extends('TrT.admin.master')
@section('nd')

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
        <a> <span class="list-sp-product">Thêm sản phẩm</span></a>
        <br><br>
    </div>
    
    <form action="/Laravel54/public/TrT/admin/sanpham/them" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <div class="form-block">
                <label>Tên sản phẩm</label>
                <input type="text" name="ten_sp"  required>
            </div>

            <div class="form-block">
                <label>Hình ảnh</label>
                <input type="file" name="hinh_anh"  required>
            </div>

            <div class="form-block">
                <label>Giá sản phẩm</label>
                <input type="number" name="gia" title="Nghìn đồng" required>
            </div>
            
            <div class="form-block">
                <label>Loại sản phẩm</label>
                <input type="text" name="loai_sp"  required>
            </div>      

            <div class="form-block">
                <label>NSX</label>
                <input type="text" name="nsx"  required>
            </div>

            <div class="form-block">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>

            <div class="form-block">
                <button type="reset" class="btn btn-primary">Làm mới</button>
                <a href="/Laravel54/public/TrT/admin/sanpham/hienthi">Danh sách sản phẩm</a>
            </div>
    </form>
	<h6></h6>
</div>

@endsection