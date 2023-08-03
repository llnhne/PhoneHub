@extends('layouts.user')
@section('content')
    <div class="grid wide" style="margin-top:7%">
        <div class="row">

            <div class="col-lg-8 ">
                <div class="col-flex">
                    <div class="slide-thumb">
                        <div class="slide-thumb-list">


                            <div class="slide-thumb-item">
                                <img src="/storage/images/iphone-13-mini-1-2.jpg" class="slide-thumb-item-img" alt="">
                            </div>

                            <div class="slide-thumb-item">
                                <img src="/storage/images/iphone-13-1-2.jpg" class="slide-thumb-item-img" alt="">
                            </div>
                            <div class="slide-thumb-item">
                                <img src="/storage/images/iphone-14-do-glr-1.jpg" class="slide-thumb-item-img"
                                    alt="">
                            </div>
                            <div class="slide-thumb-item">
                                <img src="/storage/images/iphone-13-mini-1-2.jpg" class="slide-thumb-item-img"
                                    alt="">
                            </div>
                            <div class="slide-thumb-item">
                                <img src="/storage/images/iphone-13-1-2.jpg" class="slide-thumb-item-img" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="zoom-container">
                        <a href="" class="zoom-container-item">
                            <img src="{{ $products->image }}" alt="" class="zoom-container-img">
                        </a>
                    </div>
                </div>


            </div>


            <div class="col-lg-4">
                <h1 class="container__order-heading fw-semibold">
                    {{ $products->name }}
                </h1>
                <div class="d-flex">
                    <h4 class="fw-semibold">Mã sản phẩm: </h4>
                    <p class="fs-5 mx-2">{{ $products->id }}</p>
                </div>
                <div class="d-flex mt-2">
                    <h4 class="fw-semibold">Danh mục: </h4>
                    <p class="fs-5 mx-2">{{ $products->category->name }}</p>
                </div>
                <div class="d-flex mt-2">
                    <h4 class="fw-semibold">Thương hiệu: </h4>
                    <p class="fs-5 mx-2">{{ $products->brand->name }}</p>
                </div>
                <div class="d-flex mt-2">
                    <h4 class="fw-semibold">Loại Ram: </h4>
                    <p class="fs-5 mx-2">{{ $products->ram->name }}</p>
                </div>
                <div class="d-flex mt-2">
                    <h4 class="fw-semibold">GB: </h4>
                    <p class="fs-5 mx-2">{{ $products->rom->name }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex mt-2">
                            <h4 class="fw-semibold">Màu sắc: </h4>
                            <p class="fs-5 mx-2">{{ $products->color->name }}</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex mt-2">
                            <h4 class="fw-semibold">Màn hình: </h4>
                            <p class="fs-5 mx-2">{{ $products->screen->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 d-flex mt-2">
                        <h4 class="fw-semibold">Giảm: </h4>
                        <p class="fs-5 mx-2 text-danger">{{ number_format($products->sale->price_sales, 0, ',', ',') }}đ
                        </p><br>
                    </div>
                    <div class="col-lg-6 d-flex mt-2">
                        <h4 class="fw-semibold">Tình trạng: </h4>
                        <p class="fs-5 mx-2 text-success">Còn Hàng</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-2">
                            <div class="d-flex">
                                <h4 class="fw-semibold">Với Voucher: </h4>
                                <p class="fs-5 mx-2 text-danger">{{ $products->sale->name }}</p>
                            </div>
                    </div>
                </div>
                @foreach ($sales as $sale)
                    <?php $total = $products->price + $sale->price_sales?>
                    @if ($products->sale_id === $sale->id)
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mt-2">
                            
                            <h1 class="fw-semibold text-danger">{{ number_format($products->price, 0, ',', ',') }}đ </h1>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 mt-3">
                        <span class="home-product-item__price-old">{{  number_format($total, 0, ',', ',') }}đ</span>
                    </div>
                </div>
                @endif
                @endforeach

                <form action="{{ URL::to('/save-cart') }}" method="post">
                    {{ @csrf_field() }}
                    <div class="row mt-2">
                        <div class="buttons_added">
                            
                                <div class="form-outline">
                                    <input name="qty" type="number" id="typeNumber" class="form-control" min="1"
                                        value="1" />
                                    <input name="id_hidden" type="hidden" id="typeNumber" class="form-control" min="1"
                                        value="{{ $products->id }}" />
                                </div>
                        </div>

                    </div>

                    <div class="wrap-addcart">
                        <div class="row-flex mt-2">
                            <button type="submit" class="row-addcart-btn">
                                <span class="addcart-heading">Thêm giỏ hàng</span>
                            </button>

                            <button type="submit" class="row-buy-btn mt-2">
                                <span>Mua ngay</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="product-description-tab">
                <div class="scoll-nav-tabs">
                    <ul class="scoll-nav-list">
                        <li class="scoll-nav-item active">
                            <span class="scoll-nav-link">
                                Mô tả
                            </span>
                        </li>

                        <li class="scoll-nav-item">
                            <span class="scoll-nav-link">
                                Chính sách thanh toán
                            </span>
                        </li>

                        <li class="scoll-nav-item">
                            <span class="scoll-nav-link">
                                Chính sách đổi trả
                            </span>
                        </li>

                        <li class="scoll-nav-item">
                            <span class="scoll-nav-link">
                                Bình luận
                            </span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="tab-content text-center mt-5">
                {!! $products->description !!}
            </div>
        </div>
    </div>

    <div class="product-heading mt-4">SẢN PHẨM LIÊN QUAN</div>


    <div class="row sm-gutter margin-b">
        @foreach ($related as $product)
            <div class="col-lg-2">

                <a href="{{ route('user.detail', ['id' => $product->id]) }}" class="home-product-item">
                    <div class="home-product-item__img">
                        <img class="product-item-img" src="{{ $product->image }}" alt="">
                    </div>

                    <h3 class="home-product-item__name">
                        Thương Hiệu: {{ $product->name }}
                    </h3>
                    @foreach ($sales as $sale)
                                <?php $total =  $sale->price_sales + $product->price ?>
                            
                        @if ($product->sale_id === $sale->id)
                    <div class="home-product-item__price">

                        <span class="home-product-item__price-current ">{{ number_format($product->price, 0, ',', ',') }}đ</span>
                        <span class="home-product-item__price-old">{{  number_format($total, 0, ',', ',') }}đ</span>
                    </div>
                    <div class="home-product-item__sale-off">
                        <span class="home-product-item__percent">Giảm: {{ number_format($sale->price_sales, 0, ',', ',') }}đ</span>
    
    
                    </div>
                    @endif
                    @endforeach



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
    </div>
@endsection

