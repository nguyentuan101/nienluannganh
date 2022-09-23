<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrT | Cửa hàng tiện lợi</title>
    <link href="/Laravel54/public/user/css/master.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="wrap">

        <div class="search">
            <input type="text">
            <input type="button" value="Search">
        </div>

        <div class="list-product"> 

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
                    @foreach($chi_tiet_hd as $sp)
                    <tr>
                        <td> <img src="/Laravel54/public/image/sanpham/{{$sp->hinh_anh}}" alt="h/a" id="hinh"> </td>
                        <td>{{$sp->id}}</td>
                        <td>{{$sp->masp}}</td>
                        <td>{{$sp->loai_sp}}</td>
                        <td>{{$sp->nsx}}</td>
                        <td><a href="/Laravel54/public/TrT/admin/sanpham/xoa/{{$sp->id}}">Xóa</a></td>
                        <td><a href="/Laravel54/public/TrT/admin/sanpham/sua/{{$sp->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
</body>
</html>