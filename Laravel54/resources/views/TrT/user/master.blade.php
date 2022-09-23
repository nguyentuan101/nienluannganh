<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrT | Cửa hàng tiện lợi</title>
    <link rel="shortcut icon" type="image/png" href="/Laravel54/public/image/panner.jpg"/>
    <link href="/Laravel54/public/user/css/master.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="wrap">
        @include('TrT.user.header')

    <div class="page">  
        @yield('nd')  
        </div>         

        @include('TrT.user.footer')

    </div>
</body>
</html>