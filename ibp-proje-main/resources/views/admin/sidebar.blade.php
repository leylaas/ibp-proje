<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets')}}/admin/img/user.jpg" alt=""
                     style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>Admin</span>
                <a href="/logoutuser" class="mb-0">Logout</a>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <div class="nav-item">
                <a href="/admin" class="nav-link"><i class="nav-icon fas fa-home bg-warning me-2"></i>Dashboard</a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="nav-icon fas fa-box-open bg-info me-2"></i>Orders</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/order/New" class="dropdown-item">
                        <i class="far fa-circle nav-icon me-2"></i> New Orders</a>
                    <a href="/admin/order/Accepted" class="dropdown-item">
                        <i class="far fa-circle nav-icon me-2"></i> Accepted Orders</a>
                    <a href="/admin/order/Cancelled" class="dropdown-item">
                        <i class="far fa-circle nav-icon me-2"></i> Cancelled Orders</a>
                </div>
            </div>
            <div class="nav-item">
                <a href="/admin/category" class="nav-link"><i class="nav-icon fas fa-th bg-warning me-2"></i>Categories</a>
            </div>
            <div class="nav-item">
                <a href="/admin/product" class="nav-link"><i class="nav-icon fas fa-th me-2"></i>Products</a>
            </div>
            <div class="nav-item">
                <a href="/admin/comment" class="nav-link"><i class="nav-icon fas fa-comment me-2"></i>Comments</a>
            </div>
            <div class="nav-item">
                <a href="{{route('admin.faq.index')}}" class="nav-link"><i class="nav-icon fas fa-qrcode me-2"></i>Announcements</a>
            </div>
            <div class="nav-item">
                <a href="{{route('admin.message.index')}}" class="nav-link"><i
                        class="nav-icon fas fa-mail-bulk me-2"></i>Messages</a>
            </div>
            <div class="nav-item">
                <a href="/admin/user" class="nav-link"><i class="nav-icon fas fa-user bg-success me-2"></i>Users</a>
            </div>
            <div class="nav-item">
                <a href="/admin/social" class="nav-link"><i class="nav-icon fas fa-th me-2"></i>Social</a>
                <br>
            </div>
            <div style="margin-left: 15%">LABELS</div>
            <div class="nav-item">
                <a href="/admin/setting" class="nav-link"><i class="nav-icon fas fa-tools me-2"></i>Settings</a>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
