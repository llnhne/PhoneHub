<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="TVicqmWRm4ymQBW3biLYRWSRxdsz7vTEaRSc-MMQjKc" />
    <title>PhoneHub</title>
    <link rel="stylesheet"
        href="{{URL::asset('assetss/css/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css')}}">
    
    <link rel="shortcut icon" href="{{ URL::asset('asstets/css/img/svg.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{URL::asset('assetss/css/img/')}}">
    <link rel="stylesheet" href="{{URL::asset('assetss/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assetss/css/grid.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assetss/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assetss/css/base.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="main">
    <div class="header">
        @include('user.headeruser')
    </div>
    
        @yield('content')
    
    
        @include('user.footeruser')
    
</div>
    <script src="{{ URL::asset('assetss/css/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.login').click(function(){
                swal("Vui lòng đăng nhập để thực hiện !");
            })
        });
    </script>
</body>

</html>
