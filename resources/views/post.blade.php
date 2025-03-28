@extends('partials.main')
@section('content')
<main class="main">

    <!-- blog Section -->
    <section id="blog" class="portfolio section" style="padding-top: 5px !important;">

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @if(!empty($datas) && is_array($datas))
                        @foreach ($datas as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <img src="./assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{!! implode(' ', array_slice(explode(' ', $item['title']), 0, 4)) !!}...</h4>
                                    <p>{!! implode(' ', array_slice(explode(' ', $item['content']), 0, 4)) !!}...</p>
                                    <a href="./assets/img/portfolio/product-1.jpg" title="{{ $item['title'] }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('post_by_slug', ['slug' => $item['slug']]) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    @else
                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="400">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="filter-active">Tidak ada Data</ul>
                                </div>
                            </div>
                        </ul>
                    @endif

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

</main>
@endsection

