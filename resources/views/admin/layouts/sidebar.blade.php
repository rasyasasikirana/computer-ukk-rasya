<div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div " >
        
        <div class="">
            <div class="main-menu-header">
                <img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
        </div>
        
        <div style="padding-top: 20px;">
            <ul class="nav pcoded-inner-navbar">
                {{-- <li class="nav-item">
                    <a href="index.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li> --}}
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
                    <a href="{{ route('product.index') }}" class="nav-link d-flex align-items-center">
                        <span class="pcoded-micon me-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M6.331 8H17.67a2 2 0 0 1 1.977 2.304l-1.255 8.152A3 3 0 0 1 15.426 21H8.574a3 3 0 0 1-2.965-2.544l-1.255-8.152A2 2 0 0 1 6.331 8"/><path d="M9 11V6a3 3 0 0 1 6 0v5"/></g>
                            </svg>
                        </span>
                        <span class="pcoded-mtext ml-1">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link d-flex align-items-center" title="Logout">
                        <span class="pcoded-micon me-2 d-flex align-items-center">
                            <i class="feather icon-log-out"></i>
                        </span>
                        <span class="pcoded-mtext ml-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        
        
    </div>
</div>