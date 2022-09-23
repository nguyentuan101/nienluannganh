@extends('TrT.user.master')
@section('nd')
<link href="/Laravel54/public/user/css/trangchu.css" rel="stylesheet" />

<div class="nd">
    <div class="all-product">
        <span>gio hangf</span>
    </div>
    @if(Session::has('cart'))
    @foreach($sanpham as $sp1)
    <div>
        <span>{{$sp1['item']['ten_sp']}}</span>
        <span>{{number_format($sp1['item']['gia'])}} đ</span>
    </div>
    @endforeach
    @endif

</div>

@endsection