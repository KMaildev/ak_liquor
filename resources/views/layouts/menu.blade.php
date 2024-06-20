<div class="navbar-area"
    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/img/giano-logo.png') }}" alt="Giano Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav giano-nav-two">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/giano-logo.png') }}" alt="Giano Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('liquor.index') }}" class="nav-link">
                                Liquor
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}" class="nav-link">
                                BLog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area -->
