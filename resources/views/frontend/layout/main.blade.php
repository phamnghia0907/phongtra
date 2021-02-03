<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/css.css">
{{--    --------------}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="font/SVN-Artful Beauty.ttf">
    <link rel="stylesheet" type="text/css" href="font/SVN-Athena.ttf">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

</head>

<body>
@include('frontend.layout.header')
    @yield('content') <!-- VI TRI MINH CAN THAY THE -->
@include('frontend.layout.footer')
{{--Menu--}}
<script type="text/javascript">
    function openMenu(){
        document.getElementById("mySidebar").style.display="block";
        document.getElementById("main").style.display="none";
    }
    function closeMenu(){
        document.getElementById("mySidebar").style.display="none";
        document.getElementById("main").style.display="block";
    }
</script>
{{--Sản Phảm--}}
<script type="text/javascript">
    function openMenu(){
        document.getElementById("mySidebar").style.display="block";
        document.getElementById("main").style.display="none";
    }
    function closeMenu(){
        document.getElementById("mySidebar").style.display="none";
        document.getElementById("main").style.display="block";
    }
    function openThuonghieu(){
        document.getElementById("mythuonghieu").style.display="block";
        document.getElementById("open-thuonghieu").style.display="none";
        document.getElementById("close-thuonghieu").style.display="block";
    }
    function closeThuonghieu(){
        document.getElementById("mythuonghieu").style.display="none";
        document.getElementById("open-thuonghieu").style.display="block";
        document.getElementById("close-thuonghieu").style.display="none";
    }
    function openLoaisp(){
        document.getElementById("myloaisp").style.display="block";
        document.getElementById("open-loaisp").style.display="none";
        document.getElementById("close-loaisp").style.display="block";
    }
    function closeLoaisp(){
        document.getElementById("myloaisp").style.display="none";
        document.getElementById("open-loaisp").style.display="block";
        document.getElementById("close-loaisp").style.display="none";
    }
</script>

</body>
</html>
