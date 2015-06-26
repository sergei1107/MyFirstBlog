<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Template that use Bootstrap</title>
<link  href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   {{-- <link  href="{{asset('css/site.css')}}" rel="stylesheet">--}}
    <link  href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
    <script src="{{asset('js/carousel.css')}}"></script>
</head>
<body>
@yield('content')







<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

    });


</script>
</body>
</html>