<div class="user-box">
    <div class="float-left">
        <img src="{{ URL::asset('assets\images\users\ava.jpg') }}" alt=""
            class="avatar-md rounded-circle">
    </div>
    <div class="user-info">
        <a href="#">{{ $user->name }}</a>
        <p class="text-muted m-0">Administrator</p>
    </div>
</div>

<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="ti-home"></i>
                <span> Trang chủ</span>
            </a>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Category']) }}">
                <i class="ti-direction-alt"></i>
                <span> Quản lý danh mục </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Category']) }}">Danh sách</a></li>
                <li><a href="{{ route('editing.create', ['model'=>'Category']) }}">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Product']) }}">
                <i class="ti-briefcase"></i>
                <span> Quản lý điện thoại </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Product']) }}">Danh sách</a></li>
                <li><a href="{{ route('editing.create', ['model'=>'Product']) }}">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Sale']) }}">
                <i class="ti-ticket"></i>
                <span> Quản lý khuyến mãi </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Sale']) }}">Danh sách</a></li>
                <li><a href="{{ route('editing.create', ['model'=>'Sale']) }}">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Banner']) }}">
                <i class="ti-layers-alt"></i>
                <span> Quản lý banner </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Banner']) }}">Danh sách</a></li>
                <li><a href="{{ route('editing.create', ['model'=>'Banner']) }}">Thêm</a></li>
                
            </ul>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Bill']) }}">
                <i class="ti-printer"></i>
                <span> Quản lý hóa đơn </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Bill']) }}">Danh sách</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ route('listing.index', ['model'=>'Admin']) }}">
                <i class="ti-user"></i>
                <span> Thông tin tài khoản </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('listing.index', ['model'=>'Admin']) }}">Admins</a></li>
                <li><a href="{{ route('listing.index', ['model'=>'User']) }}">Users</a></li>
            </ul>
        </li>


    </ul>

</div>
<!-- End Sidebar -->

<div class="clearfix"></div>
