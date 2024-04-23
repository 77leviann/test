<link href="{{ asset('css/header.css') }}" rel="stylesheet">

<header>
    <nav class="navbar navbar-expand-lg h-100">
        <div class="container mx-6">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/global/logo.png') }}" alt="logo" width="50" height="50"
                    class="rounded-circle">
            </a>
            <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/service') ? 'menu-active' : '' }}" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/article') ? 'menu-active' : '' }}" href="/article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/about') ? 'menu-active' : '' }}" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
