
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5"> <img src="https://i.imgur.com/2zDU056.png" width="50"> </div>
                <div class="invoice p-5">
                    {{-- <h1>{{ $title }}</h1> --}}
                        <h5>Đặt Hàng Thành Công ! Chúng tôi sẽ liên lạc sớm để xác nhận đơn hàng.</h5><br> <span class="font-weight-bold d-block mt-4">Hello,
                            {{ $bills->user_name }}</span><br>
                        <span>Thông Tin Chi Tiết Hóa Đơn.</span><br>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Ngày Đặt
                                                    Hàng</span> <span>{{ $bills->create_at }}</span> </div>
                                        </td><br>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Mã Đơn Hàng</span>
                                                <span>{{ $bills->bill_name }}</span>
                                            </div><br>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Thanh Toán</span>
                                                <span><img src="https://img.icons8.com/color/48/000000/mastercard.png"
                                                        width="20" /></span>
                                            </div><br>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Địa Chỉ</span>
                                                <span>{{ $bills->address }}</span>
                                            </div><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td width="20%"> <img src="" width="90"> </td><br>
                                        <td width="60%"> <span
                                                class="font-weight-bold"></span>
                                            <div class="product-qty"> <span class="d-block">Quantity:1</span>
                                               
                                                   
                                                        <span>Color:</span>
                                                
                                               
                                            </div><br>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right"> <span
                                                    class="font-weight-bold"></span>
                                            </div><br>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Thành Tiền</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>{{ $bills->sum_price }}</span> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Phí Ship</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>Free</span> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Thuế</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>Free</span> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Mã Giảm Giá</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span class="text-success"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left"> <span class="font-weight-bold">Tổng
                                                        Tiền</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span
                                                        class="font-weight-bold">{{ $bills->sum_price }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>Chúng tôi sẽ gửi email xác nhận vận chuyển khi mặt hàng được vận chuyển thành công!</p>
                        <p class="font-weight-bold mb-0">Cảm ơn bạn đã lựa chọn mua sắm.</p> <span>PhoneHub</span>
                    
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Cần giúp đỡ? hãy ghé qua <a
                            href="#">
                            trung tâm trợ giúp</a></span> <span>12 June, 2020</span> </div>
            </div>
        </div>
    </div>
</div>
