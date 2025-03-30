<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1 class="sitename">SMP<span>ROSA</span></h1>
        </a>

        <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('post') }}" class="{{ request()->routeIs('post') ? 'active' : '' }}">Blog</a></li>
            <li><a href="{{ route('home') }}#tentang-kami">Tentang Kami</a></li>
            <li><a href="{{ route('home') }}#program">Program</a></li>
            <li><a href="{{ route('home') }}#guru">Guru</a></li>
            <li><a href="{{ route('home') }}#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{ route('home') }}#tentang-kami">Mulai</a>

    </div>
</header>
