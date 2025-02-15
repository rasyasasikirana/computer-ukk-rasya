<div class="m-header">
    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    <a href="#!" class="b-brand">
        <!-- ========   change your logo hear   ============ -->
        <img src="assets/images/logo.png" alt="" class="logo">
        <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
    </a>
    <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
    </a>
</div>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        <li>
            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">
                        <img src="assets/images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                        <span>John Doe</span>
                        {{-- <a href="{{ asset('layouts.login') }}" class="dud-logout" >
                            
                        </a> --}}
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                        
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                           class="dud-logout" title="Logout">
                            <i class="feather icon-log-out"></i>
                        </a>
                    </div>
                    {{-- <ul class="pro-body">
                        <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                    </ul> --}}
                </div>
            </div>
        </li>
    </ul>
</div>