@extends('TrT.user.master')
@section('nd')
<link href="/Laravel54/public/user/css/trangchu.css" rel="stylesheet" />

<div class="nd">
    <div class="all-product">
        <span>SẢN PHẨM / TẤT CẢ MẶT HÀNG</span>
    </div>
    <p><a href="showcart">showcart</a></p>
    @foreach($san_pham as $sp)
    <div class="sp">
        <div class="image-product">
            <a href="sanpham/{{$sp->id}}">
                <img src="/Laravel54/public/image/sanpham/{{$sp->hinh_anh}}" alt="sp" class="img-image">
            </a>
        </div>

       <div class="name_price">
           <div class="name-price1">
               <a href="#"> <span>{{$sp->ten_sp}}</span> <br></a>
           </div>
           <div class="name-price2">
            <span class="gach-chan">10.000 vnd</span> <span>{{$sp->gia}}vnd</span>
           </div>
       </div>
    </div>
    @endforeach

</div>

@endsection