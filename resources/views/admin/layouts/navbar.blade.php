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
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
            <div class="search-bar">
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right notification">
                    <div class="noti-head">
                        <h6 class="d-inline-block m-b-0">Notifications</h6>
                        <div class="float-right">
                            <a href="#!" class="m-r-10">mark as read</a>
                            <a href="#!">clear all</a>
                        </div>
                    </div>
                    <ul class="noti-body">
                        <li class="n-title">
                            <p class="m-b-0">NEW</p>
                        </li>
                        <li class="notification">
                            <div class="media">
                                <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                    <p>New ticket Added</p>
                                </div>
                            </div>
                    </ul>
                    <div class="noti-footer">
                        <a href="#!">show all</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">
                        <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
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
                    <ul class="pro-body">
                        <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>