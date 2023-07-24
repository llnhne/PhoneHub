@extends('layouts.user')
@section('content')
<div class="container-contact">
    <div class="grid wide">
        <div class="row ">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <nav class="category">
                    <h3 class="category__heading">Danh mục</h3>

                    <ul class="category-list">
                        @foreach ($categories as $category)
                            <li class="category-item">
                                <a href="index.html" class="category-item__link">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </nav>

                <div class="banner-left-page">
                    <a href="" class="banner-left-link">
                        <img src="./assets/css/img/bannerleft.webp" alt="" class="banner-left-img">
                    </a>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">

                <div class="heading-page">
                    <h1 class="fw-bold">LIÊN HỆ</h1>
                </div>
                <div class="container__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5962410165353!2d105.8503967754471!3d21.00881598846299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf536678d0d%3A0xecd5d2bb622de97b!2zNTEyIFRy4bqnbiBLaMOhdCBDaMOibiwgUGjhu5EgSHXhur8sIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1690202356276!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row page-content">
                 
                    <div class="col l-6 " style="margin-top:5%;">
                        <div class="contact-form-wrap">
                            <div class="contact-form-title">
                                <h6>GỬI THẮC MẮC CHO CHÚNG TÔI</h6>
                            </div>
                            <form class="contact-form">
                                <ul class="form-fill">
                                    <li class="form-fill-item">
                                        <label for="">Họ và tên</label>
                                        <input type="text"  class = "form-input-name" placeholder="Nhập tên của bạn">
                                        <span class="form-message"></span>
                                    </li>

                                    <li class="form-fill-item">
                                        <label for="">Số điện thoại</label>
                                        <input type="text"  class = "form-input-phone" placeholder="Nhập số điện thoại của bạn">
                                        <span class="form-message"></span>

                                    </li>

                                    <li class="form-fill-item">
                                        <label for="">Message</label>
                                        <textarea name="" id="" cols="" rows="5" class="form-textarea" placeholder="Nội dụng..."></textarea>
                                        <span class="form-message"></span>

                                    </li>
                                </ul>

                                <div class="contact-submit">
                                    <button class="contact-submit-btn" type="button">
                                        Gửi liên hệ
                                        <i class="contact-submit-icon fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col l-6" style="margin-top:5%;">
                        <div class="concact-info">
                            <div class="contact-info-title">
                                <h6>THÔNG TIN LIÊN HỆ</h6>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut adipisci voluptas amet eveniet, officia eaque autem suscipit neque molestiae! Sit minima repudiandae dolorum, facilis asperiores eligendi obcaecati explicabo deleniti non.
                                </p>
                            </div>
                            <ul class="contact-info-list">
                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-location-dot"></i>
                                    <span>
                                    
                                        512 Trần Khát Chân, Phương Phố Huế, Quận Hai Bà Trưng, Hà Nội.
                                    </span>
                                </li>

                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-phone"></i>
                                    <span>Số điện thoại
                                        : 0838397376</span>
                                </li>

                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-envelope"></i>
                                    <span>phonehub@gmail.com</span>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection