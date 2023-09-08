<header>
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="left-content d-flex align-items-center">
                        <div class="logo mr-45">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets') }}/img/logo/logo.png"
                                    alt=""></a>
                        </div>

                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/job/search') }}">Browse Job</a></li>
                                    <li><a href="#">Page</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/blog/search') }}">Blog</a></li>
                                            <li><a href="#">Candidates</a></li>
                                            <li><a href="#">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="buttons">
                        <ul>
                            <li class="button-header">
                                <a href="#" class="header-btn mr-10"> <i class="fas fa-phone-alt"></i>Post A
                                    Job</a>
                                <a href="{{ url('/login') }}" class="btn header-btn2">Log In</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</header>
