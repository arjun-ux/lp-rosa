@extends('partials.main')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>SMP <span>ROUDLOTUSSALAM</span></h1>
            <p>Membentuk Generasi Unggul dengan Akhlakul Karimah dan Berwawasan Teknologi</p>
            <div class="d-flex">
                <a href="#tentang-kami" class="btn-get-started">Mulai</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="SMP Roudlotussalam">
            </div>
        </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-mortarboard icon"></i></div>
                <h4><a href="" class="stretched-link">Pendidikan Berkualitas</a></h4>
                <p>Kurikulum terintegrasi yang mengembangkan potensi akademik dan spiritual siswa</p>
            </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-heart icon"></i></div>
                <h4><a href="" class="stretched-link">Pembentukan Karakter</a></h4>
                <p>Program pembentukan karakter Islami dan akhlakul karimah yang terintegrasi</p>
            </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-laptop icon"></i></div>
                <h4><a href="" class="stretched-link">Teknologi Modern</a></h4>
                <p>Fasilitas pembelajaran berbasis teknologi untuk mendukung proses belajar</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang-kami" class="about section">
        <div class="container section-title" data-aos="fade-up">
        <span>Tentang Kami</span>
        <h2>Profil SMP Roudlotussalam</h2>
        <p>Mengenal lebih dekat dengan SMP Roudlotussalam</p>
        </div>

        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/about.png') }}" class="img-fluid" alt="SMP Roudlotussalam">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Membentuk Generasi Unggul dengan Pendidikan Islami</h3>
            <p class="fst-italic">
                SMP Roudlotussalam adalah lembaga pendidikan yang mengintegrasikan nilai-nilai Islam dengan pendidikan modern.
            </p>
            <ul>
                <li><i class="bi bi-check2-all"></i> <span>Kurikulum Nasional terintegrasi dengan nilai-nilai Islam</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Program Tahfidz Al-Quran dan pembentukan karakter Islami</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Fasilitas pembelajaran modern dan lingkungan yang kondusif</span></li>
            </ul>
            <p>
                SMP Roudlotussalam berkomitmen untuk membentuk generasi unggul yang memiliki keseimbangan antara ilmu pengetahuan dan spiritual. Dengan pendekatan pembelajaran yang holistik, kami mempersiapkan siswa untuk menghadapi tantangan masa depan dengan bekal akhlakul karimah dan kompetensi global.
            </p>
            </div>
        </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                <p>Siswa</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Ruang Kelas</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Guru & Staff</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="program" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
        <span>Program Unggulan</span>
        <h2>Program Unggulan</h2>
        <p>Program-program unggulan yang kami tawarkan</p>
        </div>

        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-book"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Program Tahfidz</h3>
                </a>
                <p>Program menghafal Al-Quran dengan target minimal 3 juz selama masa studi.</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-laptop"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Teknologi Informasi</h3>
                </a>
                <p>Program pengembangan skill teknologi dan coding untuk masa depan digital.</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-globe"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Bahasa Internasional</h3>
                </a>
                <p>Program pengembangan kemampuan bahasa Arab dan Inggris.</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-trophy"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Pengembangan Bakat</h3>
                </a>
                <p>Program pengembangan bakat dan minat dalam berbagai bidang.</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-people"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Kepemimpinan</h3>
                </a>
                <p>Program pembentukan karakter kepemimpinan dan jiwa sosial.</p>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
                <div class="icon">
                <i class="bi bi-heart"></i>
                </div>
                <a href="#" class="stretched-link">
                <h3>Akhlakul Karimah</h3>
                </a>
                <p>Program pembentukan karakter dan akhlak Islami dalam kehidupan sehari-hari.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="guru" class="team section">
        <div class="container section-title" data-aos="fade-up">
        <span>Guru & Staff</span>
        <h2>Guru & Staff</h2>
        <p>Kenali tim pengajar dan staff kami</p>
        </div>

        <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
                <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="Kepala Sekolah"></div>
                <div class="member-info">
                <h4>Ahmad Fauzi, S.Pd</h4>
                <span>Kepala Sekolah</span>
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
                <div class="pic"><img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="Wakil Kepala Sekolah"></div>
                <div class="member-info">
                <h4>Fatimah Azzahra, M.Pd</h4>
                <span>Wakil Kepala Sekolah</span>
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
                <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="Guru Tahfidz"></div>
                <div class="member-info">
                <h4>Muhammad Rizki, S.Pd</h4>
                <span>Guru Tahfidz</span>
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
        <span>Kontak</span>
        <h2>Hubungi Kami</h2>
        <p>Silakan hubungi kami untuk informasi lebih lanjut</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
            <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                    <h3>Alamat</h3>
                    <p>Patoman, Watukebo, Blimbingsari, Banyuwangi, Jawa Timur</p>
                </div>
                </div>

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                    <h3>Hubungi Kami</h3>
                    <p>+62 823-3301-3124</p>
                </div>
                </div>

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                    <h3>Email Kami</h3>
                    <p>smp.rosa@gmail.com</p>
                </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d811.2267463028052!2d114.33747409856905!3d-8.33160238875251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd159f71d274741%3A0xb9df3d29b4f300e8!2sPondok%20Pesantren%20Roudlotussalam!5e1!3m2!1sid!2sid!4v1741719066472!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>

            <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                <div class="col-md-6">
                    <label for="name-field" class="pb-2">Nama Lengkap</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                    <label for="email-field" class="pb-2">Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subjek</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                    <label for="message-field" class="pb-2">Pesan</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                    <button type="submit">Kirim Pesan</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>

</main>
@endsection
