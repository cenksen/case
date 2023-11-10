<header class="main-header header-style-three">
    <div class="header-top">
        <div class="inner-container">
            <div class="inner-box">
                <div class="top-left">
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i>needhelp@company.com
                        </li>
                        <li>
                            <i class="fa fa-location"></i>88 Broklyn Golden Street. New York
                        </li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-links">
                        <li>
                            <a href="#" title="">Login</a>
                        </li>
                        <li>
                            <a href="#" title="">Faq’s</a>
                        </li>
                        <li>
                            <a href="#" title="">Contact</a>
                        </li>
                    </ul>
                    <ul class="social-list-one">
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="inner-container">

            <div class="main-box">
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('ui/images/logo-4.png')}}" alt="" title="{{config('app.name')}}">
                        </a>
                    </div>
                </div>

                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li><a href="{{route('home')}}">Anasayfa</a></li>
                            <li><a href="{{route('service')}}">Hizmetlerimiz</a></li>
                            <li><a href="{{route('blog')}}">Bilgi Bankası</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="outer-box">
                    <div class="search-btn">
                        <a href="#" class="search">
                            <i class="flaticon-search-3"></i>
                        </a>
                    </div>
                    <div class="btn">
                        <a href="page-contact.html" class="theme-btn">Contact Us</a>
                    </div>
                    <div class="mobile-nav-toggler">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('ui/images/logo-4.png')}}" alt="" title="">
                    </a>
                </div>
                <div class="close-btn">
                    <i class="icon fa fa-times"></i>
                </div>
            </div>
            <ul class="navigation clearfix">

            </ul>
            <ul class="contact-list-one">
                <li>

                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+92880098670">+92 (8800) - 98670</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:help@company.com">help@company.com</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span> Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search">
            <span class="fa fa-times"></span>
        </button>
        <div class="search-inner">
            <form method="post" action="#">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="logo">
                    <a href="{{route('home')}}" title="{{config('appp.name')}}">
                        <img src="{{asset('ui/images/logo-4.png')}}" alt="{{config('app.name')}}"
                             title="{{config('app.name')}}">
                    </a>
                </div>

                <div class="nav-outer">

                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">

                            </ul>
                        </div>
                    </nav>

                    <div class="mobile-nav-toggler">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
