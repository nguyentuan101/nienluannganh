@extends('TrT.user.master')
@section('nd') 

<link href="/Laravel54/public/adminT/css/them.css" rel="stylesheet" />

<style>
    label{
        width: 150px;
        display: inline-block;
    }
    button:hover{
        background-color: lightblue;
    }
</style>

<div class="nd"> 

    <br><br><br>
    <h2>Đăng nhập</h2><br><br><br>

    <form action="#" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />       

            <div class="form-block">
                <label>Tên đăng nhập: </label>
                <input type="text" name="name" required  style="height:25px;">
                <br><br>
            </div><br>
            
            <div class="form-block">
                <label>Mật khẩu</label>
                <input type="password"  name="password" required style="height:25px;">
                <br><br><br>
            </div>

            <div class="form-block">
                <button type="submit" class="btn btn-primary" style="background-color:blue;color:white; height:25px, width:30px;">Đăng nhập</button>
                <br><br><br><br><br><br>
            </div>
        
    </form>
</div>

@endsection                 
                    
                    
                    
                    