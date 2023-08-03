
    <div class="header-logo">
        <a href="" class="header-logo-link">
            <img src="/storage/images/logo3.jpg" alt="" class="header-logo-img">
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
                <a href="/products" class="header-navbar-link">
                    Danh mục
                    <i class="header-navbar-icon fa-solid fa-angle-down"></i>
                </a>

                <div class="navbar-menu">
                    <div class="navbar-inner">
                        <div class="navbar-inner-item">
                            
                                <div class="navbar-title">
                                    @foreach ($categories as $cate)
                                    <a href="{{ URL::to('/danhmuc-sanpham/'.$cate->id) }}" class="navbar-title-link" style="margin-left:35px;">
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
                <a href="/products" class="header-navbar-link">
                    Thương hiệu
                    <i class="header-navbar-icon fa-solid fa-angle-down"></i>
                </a>
                <div class="sup-top-menu">
                    <ul class="sup-menu-dropdown">
                        
                        @foreach ($brands as $brand)
                        <li class="sup-menu-drop-item">
                            <a href="{{ URL::to('/thuonghieu-sanpham/'.$brand->id) }}" class="sup-menu-drop-link">
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
                <span href="" class="header-icon-link icon-bridge" data-origial-title="Lịch sử đơn"
                    data-tooltip="tooltip">
                    <i class="header-icon header-icon-event fa-solid fa-magnifying-glass"></i>

                </span>
            </li>
            
            <li class="header-icon-item">
                
                        <a href="/register" class="header-icon-link icon-bridge" data-origial-title="Tài khoản"
                    data-tooltip="tooltip"><i class="header-icon fa-solid fa-user"></i></a>
                    
                
            </li>
            
            
            <form action="{{ URL::to('/show-cart') }}" method="post">
                {{ @csrf_field() }}
                  <li class="header-icon-item header-item-pay">
                    <a href="/show-cart" class="header-icon-link icon-bridge" data-origial-title="Giỏ hàng" data-tooltip="tooltip">
                      <i class="header-icon fa-solid fa-cart-shopping"></i>
                      <span class="number-cart">{{ Cart::count() }}</span>
                    </a>
                  </li>
              </form>
        </ul>
    </div>
    