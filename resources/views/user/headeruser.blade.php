
    <div class="header-logo">
        <a href="" class="header-logo-link">
            <img src="{{ URL::asset('assetss/css/img/logo1.webp') }}" alt="" class="header-logo-img">
        </a>
    </div>

    <div class="header-navbar ">
        <ul class="header-navbar-list">
            <li class="header-navbar-item">
                <a href="/" class="header-navbar-link">
                    Trang chủ
                </a>
            </li>

            <li class="header-navbar-item mega-menu  nav-bridge">
                <a href="/trangchu" class="header-navbar-link">
                    Danh mục
                    <i class="header-navbar-icon fa-solid fa-angle-down"></i>
                </a>

                <div class="navbar-menu">
                    <div class="navbar-inner">
                        <div class="navbar-inner-item">
                            
                                <div class="navbar-title">
                                    @foreach ($categories as $cate)
                                    <a href="" class="navbar-title-link" style="margin-left:35px;">
                                        {{ $cate->name }}
                                    </a>
                                    @endforeach
                                </div>
                            
                        </div>
                        
                    </div>
                </div>
            </li>

            <li class="header-navbar-item">
                <a href="tintuc.html" class="header-navbar-link">
                    Tin tức
                </a>
            </li>

            <li class="header-navbar-item">
                <a href="/contact" class="header-navbar-link">
                    Liên hệ
                </a>
            </li>

            <li class="header-navbar-item">
                <a href="" class="header-navbar-link">
                    Hướng dẫn

                </a>
            </li>

            <li class="header-navbar-item sup-dropdown">
                <a href="/trangchu" class="header-navbar-link">
                    Thương hiệu
                    <i class="header-navbar-icon fa-solid fa-angle-down"></i>
                </a>
                <div class="sup-top-menu">
                    <ul class="sup-menu-dropdown">
                        
                        @foreach ($brands as $brand)
                        <li class="sup-menu-drop-item">
                            <a href="" class="sup-menu-drop-link">
                                {{ $brand->name }}

                            </a>
                        </li>
                        @endforeach
                        <li class="sup-menu-drop-item">
                            <a href="" class="sup-menu-drop-link">
                                Xem thêm các thương hiệu khác ...

                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>

    <div class="header-group-icon">
        <ul class="header-icon-list">
            <li class="header-icon-item showsearch">
                <span href="" class="header-icon-link icon-bridge" data-origial-title="tìm kiếm"
                    data-tooltip="tooltip">
                    <i class="header-icon header-icon-event fa-solid fa-magnifying-glass"></i>

                </span>
                <div class="header-active-drop">
                    <form action="">
                        <div class="header-active-content">
                            <p class="header-active-search">
                                TÌM KIẾM
                            </p>
                            <div class="site-search">
                                <div class="search-inner">
                                    <input type="text" placeholder="Tìm kiếm sản phẩm..." class="search-inner-input
                                    ">
                                </div>
                                <button type="button" class="search-inner-btn">
                                    <i class="search-inner-icon fa-solid fa-magnifying-glass "></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </li>

            <li class="header-icon-item">
                
                        <a href="/register" class="header-icon-link icon-bridge" data-origial-title="Đăng Ký"
                    data-tooltip="tooltip"><i class="header-icon fa-solid fa-user"></i></a>
                
            </li>

            

            <li class="header-icon-item header-item-pay">
                <span href="" class="header-icon-link icon-bridge" data-origial-title="Giỏ hàng"
                    data-tooltip="tooltip">
                    <i class="header-icon fa-solid fa-cart-shopping"></i>
                    <span class="number-cart">0</span>


                </span>
                <div class="model-overlay">

                    <div class="model">
                        <div class="header-model">
                            GIỎ HÀNG
                        </div>

                        <div class="model-content">

                            <div class="cart-scroll">
                                <table class="cart-view">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <i class="text-center-icon fa-solid fa-cart-shopping"></i>
                                                <p>Hiện chưa có sản phẩm</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <span class="live"></span>

                            <table class="table-total">
                                <tbody>
                                    <tr>
                                        <td class="text-left">TỔNG TIỀN</td>
                                        <td class="text-right">0đ</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-cart">
                                            <a href="#">Xem giỏ hàng</a>
                                        </td>
                                        <td class="text-right text-pay">
                                            <a href="">Thanh toán</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <span class="model-close">
                            <i class="model-close-icon fa-solid fa-circle-xmark"></i>
                        </span>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    