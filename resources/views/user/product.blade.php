@extends('layouts.user')
@section('content')
<div class="banner-header">
    <div class="grid wide">
        <div class="product-banner">
            <img class="product-banner-img" src="{{ URL::asset('assetss/css/img/p1.jpg') }}" alt="">
        </div>
    </div>
</div>
<div class="container-content">
    <div class="grid wide">
        <div class="row ">
            <div class="col-lg-3 ">
                <nav class="category-product">
                    <h3 class="category__heading">Danh mục</h3>

                    <ul class="category-list">
                        @foreach ($categories as $category)
                        <li class="category-item">
                            
                            <a href="{{ URL::to('/danhmuc-sanpham/'.$category->id) }}" class="category-item__link">
                                
                                {{ $category->name }}                                           

                        </a>
                            
                        </li>
                        @endforeach
                    </ul>

                </nav>
                <nav class="category-product">
                    <h3 class="category__heading">Thương hiệu</h3>

                    <ul class="category-list">
                        @foreach ($brands as $brand)
                        <li class="category-item">
                            
                            <a href="{{ URL::to('/thuonghieu-sanpham/'.$brand->id) }}" class="category-item__link">
                                
                                {{ $brand->name }}                                           

                        </a>
                            
                        </li>
                        @endforeach
                    </ul>

                </nav>
            </div>

            <div class="col-lg-9">
                <h1 class="text-center fw-bold mt-4">SẢN PHẨM MỚI NHẤT</h1>
                <div class="row sm-gutter ">

                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4">
                        <a href="thanhtoan.html" class="home-product-item">
                            <div class="home-product-item__img">
                                <img class="product-item-img" src="{{ $product->image }}" alt="">
                            </div>

                            <h4 class="fw-semibold text-center mt-4 text-dark">
                                {{ $product->name }}
                            </h4>

                            <div class="home-product-item__price">


                                <span class="home-product-item__price-current text-center">{{  number_format($product->price, 0, ',', ',') }}đ</span>
                            </div>

                      

                            <div class="home-product-icon-action">
                                <div class="icon-action add-to-cart">
                                    <button>Thêm giỏ hàng</button>
                                </div>
                                <div class="icon-action icon-action-view">
                                    <button>Xem chi tiết</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    @endforeach

                    
                    <div class="col-md-12 col-sm-12 mt-4">
                        <div class="d-flex justify-content-end">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</div>

@endsection
