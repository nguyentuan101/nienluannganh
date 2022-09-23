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
        <a> <span class="list-sp-product"> Danh Sách Sản Phẩm</span></a>
        <br><br>
    </div>

    <table class="shop_table beta-shopping-cart-table" cellspacing="0">
        <thead>
            <tr>
                <th class="th-table" id="id" style="width:200px;">Hình ảnh</th>
                <th class="th-table" id="ten" style="width:200px;">Tên sản phẩm</th>
                <th class="th-table" id="gia">Giá</th>
                <th class="th-table" id="loai">Loại</th>
                <th class="th-table" id="nsx" style="width:150px;">Nhà sản xuất</th>
                <th class="th-table" id="xoa">Xóa</th>
                <th class="th-table" id="sua">Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($san_pham as $sp)
            <tr>
                <td> <img src="/Laravel54/public/image/sanpham/{{$sp->hinh_anh}}" alt="h/a" id="hinh"> </td>
                <td>{{$sp->ten_sp}}</td>
                <td>{{$sp->gia}}</td>
                <td>{{$sp->loai_sp}}</td>
                <td>{{$sp->nsx}}</td>
                <td><a href="/Laravel54/public/TrT/admin/sanpham/xoa/{{$sp->id}}">Xóa</a></td>
                <td><a href="/Laravel54/public/TrT/admin/sanpham/sua/{{$sp->id}}">Sửa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection