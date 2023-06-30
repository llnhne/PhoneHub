<div class="user-box">
    <div class="float-left">
        <img src="..\assets\images\users\z4435236404058_d897e523676d1a75ce4bd021a5f50a79.jpg" alt=""
            class="avatar-md rounded-circle">
    </div>
    <div class="user-info">
        <a href="#"><?= $user->name ?></a>
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
                <span> Home</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Danh mục </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
                <li><a href="tables-basic.html">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Sản phẩm </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
                <li><a href="tables-basic.html">Thêm</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Thông tin đơn hàng </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
                
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Thông tin thanh toán </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
                
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Thông tin khách hàng </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="ti-menu-alt"></i>
                <span> Thông tin tài khoản </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="tables-advanced.html">Danh sách</a></li>
            </ul>
        </li>


    </ul>

</div>
<!-- End Sidebar -->

<div class="clearfix"></div>
