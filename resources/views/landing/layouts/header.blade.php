<header class="header-one">
    <div class="top-header">
        <div class="container clearfix">
            <div class="logo float-left"><a href="index.html"><img src="assets/landing/images/logo/logo.png" alt=""></a>
            </div>
            <div class="address-wrapper float-right">
                <ul>
                    <li class="address">
                        <i class="icon flaticon-placeholder"></i>
                        <h6>Address:</h6>
                        <p><a href="">Jl. PP Nurul Jadid, Dusun Tj. Lor, Karanganyar...</a>
                        </p>
                    </li>
                    <li class="address">
                        <i class="icon flaticon-multimedia"></i>
                        <h6>Mail us:</h6>
                        <p>unuja@unuja.ac.id</p>
                    </li>
                </ul>
            </div> <!-- /.address-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.top-header -->

    <div class="theme-menu-wrapper">
        <div class="container">
            <div class="bg-wrapper clearfix">
                <!-- ============== Menu Warpper ================ -->
                <div class="menu-wrapper float-left">
                    <nav id="mega-menu-holder" class="clearfix ml-5">
                        <ul class="clearfix">
                            <li><a href="contact.html ">Home</a></li>
                            <li class="active"><a href="contact.html">Prestasi</a></li>
                            <li><a href="contact.html">Kegiatan</a></li>
                            <li><a href="#">Bantuan</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Panduan</a></li>
                                    <li><a href="blog-grid.html">Fax</a></li>
                                    <li><a href="blog-details.html">Kontak</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav> <!-- /#mega-menu-holder -->
                </div> <!-- /.menu-wrapper -->

                <div class="right-widget float-right">
                    <ul>
                        <li class="social-icon px-3">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                @auth
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false">
                                            HI, {{ auth()->user()->nama }}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/dashboard">My Dashboard</a>
                                            <div class="dropdown-divider"></div>
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <li>
                                        <a href="/login" class="badge bg-light text-secondary px-2">
                                            <p class="fs-5"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                Login
                                            </p>
                                        </a>
                                    </li>
                                @endauth

                            </ul>
                        </li>
                    </ul>
                </div> <!-- /.right-widget -->
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.theme-menu-wrapper -->
</header> <!-- /.header-one -->
