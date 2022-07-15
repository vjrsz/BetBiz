<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetBiz - @yield('title')</title>
    <link href="{{asset('assets_admin/img/favicon.svg')}}" rel="icon">

    <link rel="stylesheet" href=" {{ asset('assets_admin/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b08c8a640.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets_admin/js/jquery-3.6.0.min.js')}}"></script>
    
</head>

<body class="dashboard">
    @yield('content')

    <!--@stack('scripts')-->

    <script src="{{asset('assets_admin/js/popper.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_geral/jquery-mask/dist/jquery.mask.min.js')}}"></script>
</body>
</html>