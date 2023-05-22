<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./about-us.html">About Us</a></li>
            <li><a href="./classes.html">Classes</a></li>
            <li><a href="./services.html">Services</a></li>
            <li><a href="./team.html">Our Team</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./about-us.html">About us</a></li>
                    <li><a href="./class-timetable.html">Classes timetable</a></li>
                    <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                    <li><a href="./team.html">Our team</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./blog.html">Our blog</a></li>
                    <li><a href="./404.html">404</a></li>
                </ul>
            </li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">Announcements</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('faq')}}">Announcements</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-social">
                        <div class="canvas-menu mobile-menu">
                            @auth
                                <nav class="nav-menu">
                                    <ul>
                                        <li style="margin-right: 0px"> <strong class="fa fa-user-o text-uppercase"
                                                     style="color: white"> {{Auth::user()->name }} |</strong>
                                            <ul class="dropdown">
                                                <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i> My Account</a></li>
                                                <li><a href="{{route('userpanel.orders')}}"><i class="fa fa-heart-o"></i> My Orders</a></li>
                                                <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-exchange"></i> My Reviews</a></li>
                                                <li><a href="/logoutuser"><i class="fa fa-user-plus"></i> Logout</a></li>
                                            </ul>
                                        </li>
                                        <a href="/logoutuser" class="text-uppercase">Logout</a>
                                    </ul>
                                </nav>

                            @endauth
                            @guest
                                <a href="/loginuser" class="text-uppercase">Login</a>
                                <a href="/registeruser" class="text-uppercase">Join</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->
