<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">Nido Homepage</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ isCheckActiveRoute('admin.dashboard') }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chính</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#article" data-toggle="collapse" data-target="#article"
            aria-expanded="true" aria-controls="article">
            <i class="far fa-newspaper"></i>
            <span>Bài viết</span>
        </a>
        <div id="article" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ isCheckActiveRoute('admin.article.index') }}"
                    href="{{ route('admin.article.index') }}">Danh sách bài viết</a>
                <a class="collapse-item" href="{{ route('admin.article.create') }}">Thêm bài viết</a>
            </div>
        </div>
    </li>

    <li class="nav-item  {{ isCheckActiveRoute('admin.banner.index') }}">
        <a class="nav-link" href="{{ route('admin.banner.index') }}">
            <i class="far fa-images"></i>
            <span>Gallery</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#setting" data-toggle="collapse" data-target="#setting"
            aria-expanded="true" aria-controls="setting">
            <i class="far fa-newspaper"></i>
            <span>Cài đặt</span>
        </a>
        <div id="setting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.site.index') }}">Cài đặt trang</a>
                <a class="collapse-item" href="{{ route('password') }}">Đổi mật khẩu</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
