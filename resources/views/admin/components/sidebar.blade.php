<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">School Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ isCheckActiveRoute('admin.dashboard') }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chính</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Chức năng quản trị
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="far fa-newspaper"></i>
            <span>Bài viết</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ isCheckActiveRoute('admin.article.index') }}"
                    href="{{ route('admin.article.index') }}">Danh sách bài viết</a>
                <a class="collapse-item" href="{{ route('admin.article.create') }}">Thêm bài viết</a>
            </div>
        </div>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.core.index') }}">
        <a class="nav-link" href="{{ route('admin.core.index') }}">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Giá trị cốt lỗi</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.banner.index') }}">
        <a class="nav-link" href="{{ route('admin.banner.index') }}">
            <i class="far fa-images"></i>
            <span>Banner</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.address.index') }}">
        <a class="nav-link" href="{{ route('admin.address.index') }}">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <span>Địa chỉ</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.studyprogram.index') }}">
        <a class="nav-link" href="{{ route('admin.studyprogram.index') }}">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <span>Chương trình học</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.rating.index') }}">
        <a class="nav-link" href="{{ route('admin.rating.index') }}">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span>Đánh giá</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.site.index') }}">
        <a class="nav-link" href="{{ route('admin.site.index') }}">
            <i class="fas fa-tools"></i>
            <span>Thông tin</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
