<div id="left-sidebar" class="sidebar">
    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand text-center">
        <a href="index.html"><img src="{{ asset('assets/images/unuja.png') }}" alt="Mooli Logo"
                class="img-fluid logo"><span>PRESMA UNUJA</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png') }}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Mahasiswa,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name text-uppercase"
                    data-toggle="dropdown"><strong>{{ auth()->user()->nim }}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                    <li class="divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item d-inline"> <i class="fa fa-power-off mr-2"> </i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Main</li>
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard"><i
                            class="fa fa-dashboard">
                        </i> <span>Dashboard</span></a></li>
                <li class="header">Apps</li>
                <li class="{{ Request::is('dashboard/presma') ? 'active' : '' }}"><a href="/dashboard/presma">
                        <i class="fa fa-trophy"></i>Prestasiku</a></li>
                <li class="{{ Request::is('dashboard/presma/create') ? 'active' : '' }}"><a
                        href="/dashboard/presma/create">
                        <i class="fa fa-send"></i> <span>Pengajuan</span></a></li>
                <li class="{{ Request::is('dashboard/pengumuman') ? 'active' : '' }}"><a href="/dashboard/pengumuman">
                        <i class="fa fa-calendar"></i> <span>pengumuman</span></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
