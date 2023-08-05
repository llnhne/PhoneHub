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
                                            <h5 class="text-uppercase">Thành Tiền: {{ number_format(Cart::subtotal()) }}đ</h5>
                                        </div>

                                        @if (Session::get('cart'))
                                            <form action="{{ url('/check-coupon') }}" method="post">
                                                @csrf
                                                <h5 class="text-uppercase mb-3">Mã Giảm Giá</h5>
                                                <div class="mb-5">
                                                    <div class="form-outline d-flex gap-4">
                                                        <input type="text" id="form3Examplea2"
                                                            class="form-control form-control-lg" name="coupon" placeholder="Nhập mã giảm giá" />
                                                        <input type="submit" class="btn btn-secondary check_coupon " name="check_coupon" value="Áp dụng Voucher"/>
                                                    </div>
                                                    <div class="mt-2">
                                                        @if ($message = Session::get('error'))
                                                            <div class="alert alert-danger">
                                                                <p class="mt-2">{{ $message }}</p>
                                                            </div>
                                                        @endif
                                                        @if ($message = Session::get('message'))
                                                            <div class="alert alert-success">
                                                                <p class="mt-2">{{ $message }}</p>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        @endif

                                        @if (Session::get('cart'))
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
                                            <div class="d-flex justify-content-between mb-3">
                                                
                                                <h5>
                                                    @if (Session::get('coupon'))
                                                        @foreach (Session::get('coupon') as $cou)
                                                        <h5 class="text-uppercase">Mã Giảm Giá: </h5>
                                                            @if ($cou['coupon_condition'] == 1)
                                                                <h5 class="">- {{ $cou['coupon_number'] }}%</h5>
                                                                <h5>
                                                                    @php
                                                                        $total_coupon = (Cart::subtotal() * $cou['coupon_number']) / 100;
                                                                        echo '<h5 class="text-danger">Tổng giảm: ' . number_format($total_coupon, 0, ',', '.') . 'đ</h5>';
                                                                    @endphp
                                                                </h5>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h5 class="text-uppercase">Tổng Thanh Toán: </h5>
                                                                        <h5 class="text-primary">{{ number_format(Cart::subtotal() - $total_coupon, 0, ',', '.') }}đ</h5>
                                                                        <input type="hidden" name="total_vnpay" value="{{ Cart::subtotal() - $total_coupon }}">
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <h5 class="text-danger">- {{ number_format($cou['coupon_number'], 0, ',', '.') }}đ</h5>
                                                                <h5>
                                                                    @php
                                                                        $total_coupon = Cart::subtotal() - $cou['coupon_number'];
                                                                    @endphp
                                                                </p>
                                                                <h5 class="text-uppercase">Tổng Thanh Toán: </h5>
                                                                <h5 class="text-primary">{{ number_format($total_coupon, 0, ',', '.') }}đ</h5>
                                                                <input type="hidden" name="total_vnpay" value="{{ $total_coupon }}">
                                                            @endif
                                                        @endforeach
                                                    
                                                </h5>
                                            </div>
                                            <button name="redirect" type="submit" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Thanh Toán</button>
                                            @else
                                            {{-- <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Tổng Thanh Toán: </h5>
                                                <h5>{{ number_format(Cart::subtotal()) }}đ</h5>
                                            </div> --}}


                                            {{-- <input type="hidden" name="total_vnpay" value="{{ Cart::subtotal() }}"> --}}
                                            <button name="redirect" type="submit" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Thanh Toán</button>
                                            @endif
                                        </form>
                                        @endif
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

