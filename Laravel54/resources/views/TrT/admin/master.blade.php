<!DOCTYPE html>
<html class="smart-style-1">

<head>
    <meta charset="utf-8" />
    <title>TrT | ADMIN</title>
    <link rel="shortcut icon" type="image/png" href="/Laravel54/public/image/panner.jpg"/>

    <link href="/Laravel54/public/adminT/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Laravel54/public/adminT/css/master-admin.css" rel="stylesheet" />
    <script src="/Laravel54/public/adminT/js/a.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery/min.js"></script>
</head>

<body>
    <div class="wrap">

        <!-- header-->
                @include('TrT.admin.header')
        <!-- header-->

        <!-- menu-->
        <div class="menu">
                @include('TrT.admin.menu')
        </div>
        <!-- menu-->

        <!-- body-->
        <div class="page">          
                @yield('nd')           
        </div>
        <!-- body-->


        </div>
        
        
    </div>
</body>

</html>