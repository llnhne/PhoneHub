@extends('layouts.user')
@section('content')
<div class="content">
<div class="banner-header">
    <div class="grid wide">
        <div class="product-banner">
            <img class="product-banner-img" src="{{ URL::asset('assetss/css/img/b5.jpg') }}" alt="">
        </div>
    </div>
</div>
<div class="container-content">
    <div class="grid wide">
        <div class="row ">
            <div class="col-lg-3 ">
                <label class="fs-2 fw-semibold mx-4">Tìm Kiếm</label><hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control " placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-describedby="button-addon2" style="padding: 10px">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Tìm Kiếm</button>
                  </div>
                <nav class="category-product mt-4">
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
                        <form action="">
                            @csrf
                            <input type="hidden" name="cart_product_id_{{ $product->id }}" value="{{ $product->id }}" class="cart_product_id_{{ $product->id }}">
                            <input type="hidden" name="cart_product_name_{{ $product->id }}" value="{{ $product->name }}" class="cart_product_name_{{ $product->id }}">
                            <input type="hidden" name="cart_product_image_{{ $product->id }}" value="{{ $product->image }}" class="cart_product_image_{{ $product->id }}">
                            <input type="hidden" name="cart_product_price_{{ $product->id }}" value="{{ $product->price }}" class="cart_product_price_{{ $product->id }}">
                            <input type="hidden" name="cart_product_qty_{{ $product->id }}" value="1" class="cart_product_qty_{{ $product->id }}">
                        
                            <div class="home-product-item">
                            <a  href="{{ URL::to('/chitietsanpham', ['id' => $product->id]) }}"  class="home-product-item__img">
                                
                                <img class="product-item-img" src="{{ $product->image }}" alt="">
                            </a>

                            <h4 class="fw-semibold text-center mt-4 text-dark">
                                {{ $product->name }}
                            </h4>
                            @foreach ($sales as $sale)
                                <?php $total =  $sale->price_sales + $product->price ?>
                            
                            @if ($product->sale_id === $sale->id)
                            <div class="home-product-item__price">


                                
                                <span class="home-product-item__price-current fw-semibold">{{  number_format($product->price, 0, ',', ',') }}đ</span>
                                <span class="home-product-item__price-old">{{  number_format($total, 0, ',', ',') }}đ</span>
                            </div>
                            
                                
                            
                            <div class="home-product-item__sale-off">
                                <span class="home-product-item__percent">Giảm: {{ number_format($sale->price_sales, 0, ',', ',') }}đ</span>
            
            
                            </div>
                        
                            @endif
                        
                            @endforeach
                      

                        <div class="home-product-icon-action">
                                
                            <div class="icon-action add-to-cart">
                               
                                <button type="button" name="add-to-cart" data-id_product="{{ $product->id }}">Thêm giỏ hàng</button>
                                
                            </div>
                            
                            <a href="{{ URL::to('/chitietsanpham', ['id' => $product->id]) }}" class="icon-action icon-action-view">
                               
                                    <button>Xem chi tiết</button>
                                
                            </a>
                            
                        </div>
                    </div>
                </form>
                    </div>
                
                    @endforeach

                    
                    <div class="col-md-12 col-sm-12 mt-4" >
                        <div class="d-flex justify-content-end" >
                            {{ $products->links('pagination::bootstrap-4') }}
                           
                        </div>
                        
                    </div>
                    
                    
            </div>
        </div>
    </div>
</div>
</div>
@endsection


