<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Nido Admin</div>
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
        Chức năng hệ thống
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

    <li class="nav-item  {{ isCheckActiveRoute('admin.banner.index') }}">
        <a class="nav-link" href="{{ route('admin.banner.index') }}">
            <i class="far fa-images"></i>
            <span>Gallery</span></a>
    </li>
    <li class="nav-item  {{ isCheckActiveRoute('admin.site.index') }}">
        <a class="nav-link" href="{{ route('admin.site.index') }}">
            <i class="fas fa-tools"></i>
            <span>Cài đặt</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
