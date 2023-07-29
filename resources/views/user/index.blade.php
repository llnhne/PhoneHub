@extends('layouts.user')
@section('content')
<div class="banner">
    
    <div class="grid wide">
        <div class="slideshow">
            <div class="slideshow-list">
                

                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ URL::asset('assetss/css/img/b2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ URL::asset('assetss/css/img/b2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ URL::asset('assetss/css/img/b2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
<div class="grid wide">

    <div class="top-title">
        <h2 class="title-section" style="color: #fff">KHUYỄN MÃI TUẦN NÀY</h2>

        <div class="count-time">
            <span class="content-time" style="color: #fff">Kết thúc trong: </span>
            <ul class="countdown-deal">
                <li>
                    <span class="day" style="color: #fff">277</span>
                </li>
                <li>
                    <span class="hours" style="color: #fff">07</span>
                </li>
                <li>
                    <span class="minutes" style="color: #fff">11</span>
                </li>
                <li>
                    <span class="seconds" style="color: #fff; ">60</span>
                </li>

            </ul>
        </div>

    </div>





    <div class="container-banner">
        <div class="container-img ">
            <div class="container-img-item ">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/i2.jpg') }}" alt="">
                </a>

                <div class="container-img-content">
                    <h3 style="color: black">HIGHT PERFORMANCE</h3>
                    <p style="color: black">Sale Up To 10% Off</p>
                </div>
            </div>

            <div class="container-img-item">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/i3.jpg') }}" alt="">
                </a>


                <div class="container-img-content">
                    <h3 style="color: black">RED SELE ENDS APRIL 30</h3>
                    <p style="color: black">Sale Up To 40% Off</p>
                </div>
            </div>
        </div>
    </div>


    <div class="top-title">
        <h1 class="fw-bold">SẢN PHẨM BÁN CHẠY</h1>

        <p class="top-title-ratings">Top trending tuần này</p>


    </div>


    <div class="row">

        @foreach ($products as $item)
        <div class="col l-2-4 c-6 m-4">
            <a href="{{ route('user.detail', ['id' => $item->id]) }}" class="home-product-item">
                <div class="home-product-item__img">
                    <img class="product-item-img" src="{{ $item->image }}" alt="" col="g">

                    
                </div>

                <h3 class="home-product-item__name" style="font-weight:600">
                    {{ $item->name }}
                </h3>

                <div class="home-product-item__price">


                    <span class="text-center">{{  number_format($item->price, 0, ',', ',') }}đ</span>

                </div>

                <div class="home-product-item__sale-off">
                    <span class="home-product-item__percent">HOT</span>


                </div>
                
                <div class="home-product-icon-action">
                    
                    <div class="icon-action add-to-cart">
                        <form action="{{ URL::to('/save-cart') }}" method="post">
                            {{ @csrf_field() }}
                        <button>Thêm giỏ hàng</button>
                    </form>
                    </div>
                    
                    <div class="icon-action icon-action-view">
                        <form action="{{ URL::to('/chitietsanpham', ['id' => $item->id]) }}" method="get">
                            <button>Xem chi tiết</button>
                        </form>
                    </div>
                </div>

            </a>
        </div>
        @endforeach
        

        
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <img src="/storage/images/iphone-14-pro-max-purple-1.jpg" alt="">
        </div>
    </div>




    <div class="container-four-banner">
        <div class="container-img">
            <div class="container-img-item ">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/s1.jpg') }}" alt="">
                </a>


            </div>
            <div class="container-img-item ">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/s2.jpg') }}" alt="">
                </a>

            </div>
            <div class="container-img-item ">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/s4.jpg') }}" alt="">
                </a>

            </div>
            <div class="container-img-item">
                <a href="" class="container-img-link">
                    <img class="container-cat-image" src="{{ URL::asset('assetss/css/img/s3.jpg') }}" alt="">
                </a>



            </div>
        </div>
    </div>



    <div class="top-title">
        <h1 class="fw-bold mt-4">SẢN PHẨM NỔI BẬT</h1>

        <div class="top-title-nav">
            <ul class="top-title-nav-list">
            @foreach ($brands as $item)
                
                    <li class="top-title-nav-item">
                        <a href="" class="top-title-nav-link">
                            {{ $item->name }}
                        </a>
                    </li>
                
            @endforeach
        </ul>
        </div>

    </div>

    
    <div class="top-title">
        <h1 class="fw-bold mt-4">TIN TỨC MỚI</h1>



    </div>

    <div class="row row-news">
        <div class="col l-3  home-product-news">
            <a class="home-news-item">
                <div class="home-new-item__img">
                    <img src="{{ URL::asset('assetss/css/img/l1.jpg') }}" class="home-new-img" alt="">
                </div>

            </a>
            <div class="home-news">
                <h2 class="home-news-heading">
                    Ra mắt iPhone 13
                </h2>

                <p class="home-news-publish">
                    <span class="home-news-date-time">
                        11/10/2022
                    </span>
                </p>

                <p class="home-news-content">
                    Được dự kiến sẽ ra mắt vào cuối năm 2023, chiếc iPhone mới này được mong đợi...
                </p>
            </div>


        </div>

        <div class="col l-3 home-product-news">
            <a class="home-news-item">
                <div class="home-new-item__img">
                    <img src="{{ URL::asset('assetss/css/img/l2.jpg') }}" class="home-new-img" alt="">
                </div>
            </a>
            <div class="home-news">
                <h2 class="home-news-heading">
                    Samsung Galaxy S21
                </h2>

                <p class="home-news-publish">
                    <span class="home-news-date-time">
                        01/10/2021
                    </span>
                </p>

                <p class="home-news-content">
                    Dòng điện thoại Samsung Galaxy S21 đã được ra mắt vào đầu năm 2021...
                </p>
            </div>

        </div>
        <div class="col l-3 home-product-news">
            <a class="home-news-item">
                <div class="home-new-item__img">
                    <img src="{{ URL::asset('assetss/css/img/l3.jpg') }}" class="home-new-img" alt="">
                </div>
            </a>
            <div class="home-news">
                <h2 class="home-news-heading">
                    Google Pixel 6
                </h2>

                <p class="home-news-publish">
                    <span class="home-news-date-time">
                        01/10/2023
                    </span>
                </p>

                <p class="home-news-content">
                    Dự kiến ​​ra mắt vào mùa thu năm 2023, Google Pixel 6 đang tạo ra sự chú ý với hệ thống camera cao cấp...
                </p>
            </div>

        </div>
        <div class="col l-3 home-product-news">
            <a class="home-news-item">
                <div class="home-new-item__img">
                    <img src="{{ URL::asset('assetss/css/img/l4.jpg') }}" class="home-new-img" alt="">
                </div>
            </a>
            <div class="home-news">
                <h2 class="home-news-heading">
                    Oppo Find X3 Pro
                </h2>

                <p class="home-news-publish">
                    <span class="home-news-date-time">
                        11/1/2023
                    </span>
                </p>

                <p class="home-news-content">
                    Được coi là một trong những điện thoại hàng đầu của Oppo, Oppo Find X3 Pro có màn hình...
                </p>
            </div>

        </div>
    </div>

    <div class="top-title">
        <h1 class="fw-bold mt-4">@ PHONEHUB</h1>
    </div>
    <div class="container-six-banner">
        <div class="container-img">
            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f1.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f3.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f4.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f5.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f6.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

            <div class="container-img-item">

                <a href="" class="container-img-link">

                    <img src="{{ URL::asset('assetss/css/img/f1.jpg') }}" class="container-cat-image" alt="">

                </a>
            </div>

        </div>

    </div>
</div>
</div>
@endsection