<nav class="navbar navbar-expand-lg bg-danger p-0 accordion" data-bs-theme="dark">
    <div class="container pe-3">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" style="max-width: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/"><span class="fa-solid fa-home"></span> Trang
                        chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/product"><span class="fa-solid fa-list"></span> Danh mục</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/about"><span class="fa-solid fa-list"></span> Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact"><span class="fa-solid fa-address-book"></span> Liên
                        hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/feedback"><span class="fa-solid fa-comment"></span> Góp ý</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/new"><span class="fa-regular fa-newspaper"></span> Tin tức</a>
                </li>
            </ul>

        </div>
        <div class="col-lg-4 col-md-6 col-3">
            <nav class="navbar navbar-expand-lg bg-danger">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Đăng nhập</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                   Xin chào, {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="{{ route('cart') }}">Giỏ hàng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin') }}">Admin</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- End Nav Social -->
        </div>
        
    </div>
</nav>