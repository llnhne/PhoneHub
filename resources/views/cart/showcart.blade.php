@extends('layouts.user')
@section('content')
    <section class="h-100 h-custom" style="background-color: #fff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                                            <h6 class="mb-0 text-muted">{{ Cart::count() }} sản phẩm</h6>
                                        </div>
                                        <hr class="my-4">

                                        @foreach (Cart::content() as $content)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ $content->options->image }}" class="img-fluid rounded-3"
                                                        alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{ $content->name }}</h6>
                                                    <h6 class="text-black mb-0">Mã SP: {{ $content->id }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <form action="{{ URL::to('update-cart') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="rowId_cart"
                                                            value="{{ $content->rowId }}">
                                                        <div class="d-flex">
                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>

                                                            <input id="form1" min="1" name="quantity"
                                                                value="{{ $content->qty }}" type="number"
                                                                class="form-control form-control-sm" />

                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>


                                                    </form>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">
                                                        <?php
                                                        $subtotal = $content->price * $content->qty;
                                                        echo number_format($subtotal, 0, ',', ',');
                                                        ?>

                                                    </h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="{{ URL::to('/delete-to-cart/' . $content->rowId) }}"
                                                        class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>

                                            </div>
                                            <div class="pt-3">
                                                <h6 class="mb-0"><a
                                                        href="{{ URL::to('/chitietsanpham', ['id' => $content->id]) }}"
                                                        class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Quay lại trang sản
                                                        phẩm.</a>
                                                </h6>
                                            </div>
                                            <hr class="my-4">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Thông Tin</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">Số sản phẩm: {{ Cart::count() }}</h5>
                                            <h5>{{ number_format(Cart::subtotal()) }}đ</h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Mã Giảm Giá</h5>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" value="" />
                                                <label class="form-label" for="form3Examplea2">Đã áp dụng khuyễn mãi</label>
                                            </div>
                                        </div>


                                        <hr class="my-4">
                                        <h5 class="text-uppercase mb-3">Check Out</h5>
                                        <form action="{{ URL::to('vnpay_payment') }}" method="POST">
                                            @csrf
                                            <input name="user_id" type="hidden" id="form3Examplea2"
                                                class="form-control form-control-lg" value="{{ Auth::user()->id }}" />

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <input name="user_name" type="text" id="form3Examplea2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Nhập tên</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <input name="phone_number" type="number" id="form3Examplea2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Số Điện Thoại</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <input name="email" type="text" id="form3Examplea2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Email</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <input name="address" type="text" id="form3Examplea2"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea2">Địa Chỉ</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <textarea name="description" type="text" id="form3Examplea2" class="form-control form-control-lg"> </textarea>
                                                    <label class="form-label" for="form3Examplea2">Ghi Chú</label>
                                                </div>
                                            </div>


                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Tổng Thanh Toán: </h5>
                                                <h5>{{ number_format(Cart::subtotal()) }}đ</h5>
                                            </div>


                                            <input type="hidden" name="total_vnpay" value="{{ Cart::subtotal() }}">
                                            <button name="redirect" type="submit" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Thanh Toán</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
