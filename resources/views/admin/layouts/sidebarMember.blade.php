<div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div " >
        
        <div class="">
            <div class="main-menu-header">
                <img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
        </div>
        
        <div style="padding-top: 20px;">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
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