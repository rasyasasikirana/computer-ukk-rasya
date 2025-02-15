<div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div " >
        
        <div class="">
            <div class="main-menu-header">
                <img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
        </div>
        
        <div style="padding-top: 20px;">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item">
                    <a href="index.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link d-flex align-items-center">
                        <span class="pcoded-micon me-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13"/>
                            </svg>
                        </span>
                        <span class="pcoded-mtext ml-1">Kategori</span>
                    </a>
                    
                </li>            
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Produk</span>
                    </a>
                </li>
            </ul>
        </div>
        
        
    </div>
</div>