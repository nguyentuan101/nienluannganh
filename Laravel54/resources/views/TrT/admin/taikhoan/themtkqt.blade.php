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

    <h4>Thêm tai khoan</h4>
    <form action="/Laravel54/public/TrT/admin/taikhoan/themtkqt" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <div class="form-block">
                <label>Tai khoan</label>
                <input type="text" name="tai_khoan"  required>
            </div>

            <div class="form-block">
                <label>Mat khau</label>
                <input type="password" name="mat_khau"  required>
            </div>
           
            <div class="form-block">
                <button type="submit" class="btn btn-primary">Thêm TK</button>
            </div>

            <div class="form-block">
                <button type="reset" class="btn btn-primary">Làm mới</button>
                <a href="/Laravel54/public/TrT/admin/taikhoan/hienthi">Danh sách tai khoan</a>
                <a href="/Laravel54/public/TrT/admin/nhanvien/hienthi">Tro lai</a>
            </div>
    </form>
</div>

@endsection