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
    @if(session('thongbao2'))
        <div class="alert alert-success">
            {{session('thongbao2')}}
        </div>
    @endif

    <h4>Thêm nhân viên</h4><br>

    
    <form action="/Laravel54/public/TrT/admin/nhanvien/them" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <div class="form-block">
                <label>Tên nhân viên</label>
                <input type="text" name="ten_nv"  required>
                <br>
            </div>

            <div class="form-block">
                <label>Địa chỉ</label>
                <input type="text" name="dia_chi"  required>
                <br>
            </div>
            
            <div class="form-block">
                <label>SDT</label>
                <input type="text" name="sdt"  required>
                <br><br>
            </div>      

            
            <button type="submit" class="btn btn-primary">Thêm</button>
        
            <button type="reset" class="btn btn-primary" id="button2">Làm mới</button>

            <a href="/Laravel54/public/TrT/admin/nhanvien/hienthi">Danh sách nhân viên</a>
        

    </form>

</div>

@endsection