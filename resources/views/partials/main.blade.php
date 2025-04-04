<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Primary Meta Tags -->
    <title>SMP Roudlotussalam | Sekolah Islam Terpadu di Banyuwangi</title>
    <meta name="title" content="SMP Roudlotussalam | Sekolah Islam Terpadu di Banyuwangi">
    <meta name="description" content="SMP Roudlotussalam adalah lembaga pendidikan Islam terpadu di Banyuwangi yang mengintegrasikan nilai-nilai Islam dengan pendidikan modern. Program unggulan: Tahfidz, Teknologi Informasi, dan Bahasa Internasional.">
    <meta name="keywords" content="SMP Roudlotussalam, sekolah islam, banyuwangi, tahfidz, pendidikan islam, sekolah terpadu">
    <meta name="author" content="SMP Roudlotussalam">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="SMP Roudlotussalam | Sekolah Islam Terpadu di Banyuwangi">
    <meta property="og:description" content="SMP Roudlotussalam adalah lembaga pendidikan Islam terpadu di Banyuwangi yang mengintegrasikan nilai-nilai Islam dengan pendidikan modern.">
    <meta property="og:image" content="{{ asset('assets/img/hero-img.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="SMP Roudlotussalam | Sekolah Islam Terpadu di Banyuwangi">
    <meta property="twitter:description" content="SMP Roudlotussalam adalah lembaga pendidikan Islam terpadu di Banyuwangi yang mengintegrasikan nilai-nilai Islam dengan pendidikan modern.">
    <meta property="twitter:image" content="{{ asset('assets/img/hero-img.png') }}">

    <!-- Favicons -->
     <link rel="stylesheet" href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
     <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/landingpage.css') }}" rel="stylesheet">
    @stack('css')

</head>

<body class="index-page">

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>



    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/landingpage.js') }}"></script>

</body>

</html>
