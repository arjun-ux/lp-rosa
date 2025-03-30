@extends('partials.main')
@section('content')
@push('css')
<style>
    .blog-card {
        transition: transform 0.3s ease;
        border: none;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }
    .blog-card:hover {
        transform: translateY(-5px);
    }
    .blog-image {
        height: 250px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }
    .blog-content {
        padding: 1.5rem;
    }
    .blog-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        color: #333;
    }
    .blog-excerpt {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .blog-meta {
        font-size: 0.85rem;
        color: #888;
        margin-top: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    .blog-meta i {
        margin-right: 0.25rem;
    }
    .read-more {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 1rem;
    }
    .read-more:hover {
        color: #0056b3;
    }
    /* Featured Post Styles */
    .featured-post {
        margin-bottom: 3rem;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .featured-post .row {
        margin: 0;
    }
    .featured-post .col-lg-6 {
        padding: 0;
    }
    .featured-post img {
        height: 400px;
        object-fit: cover;
    }
    .featured-content {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .featured-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #333;
    }
    .featured-excerpt {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #666;
        margin-bottom: 1.5rem;
    }
    /* Sidebar Styles */
    .sidebar-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    .sidebar-header {
        padding: 1.25rem;
        border-bottom: 1px solid #eee;
        font-weight: 600;
        color: #333;
    }
    .sidebar-body {
        padding: 1.25rem;
    }
    .recent-post-item {
        display: flex;
        gap: 1rem;
        padding: 0.75rem 0;
        border-bottom: 1px solid #eee;
    }
    .recent-post-item:last-child {
        border-bottom: none;
    }
    .recent-post-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 6px;
    }
    .recent-post-content {
        flex: 1;
    }
    .recent-post-title {
        font-size: 0.95rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 0.25rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .recent-post-date {
        font-size: 0.8rem;
        color: #888;
    }
    .categories-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .categories-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #eee;
    }
    .categories-list li:last-child {
        border-bottom: none;
    }
    .categories-list a {
        color: #666;
        text-decoration: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: color 0.3s;
    }
    .categories-list a:hover {
        color: #007bff;
    }
    .category-count {
        background: #f8f9fa;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        font-size: 0.8rem;
        color: #666;
    }
</style>
@endpush

<main class="main">
    <section class="section" style="padding-top: 5px !important;">
        <div class="container">
            <!-- Featured Latest Post -->
            @if(isset($latest_post) && is_array($latest_post) && !empty($latest_post['title']))
            <div class="featured-post">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ $latest_post['image'] ?? '' }}" class="img-fluid" alt="{{ $latest_post['title'] }}">
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <h2 class="featured-title">
                                <a href="{{ route('post_by_slug', ['slug' => $latest_post['slug'] ?? '']) }}" class="text-decoration-none text-dark">
                                    {{ $latest_post['title'] }}
                                </a>
                            </h2>
                            <div class="blog-meta">
                                <span><i class="bi bi-person"></i> {{ $latest_post['writer'] ?? 'Anonymous' }}</span>
                                <span><i class="bi bi-eye"></i> {{ $latest_post['viewer'] ?? 0 }}</span>
                                <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($latest_post['created_at'] ?? now())->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                            </div>
                            <p class="featured-excerpt">
                                {!! \Illuminate\Support\Str::limit(strip_tags($latest_post['content'] ?? ''), 200) !!}
                            </p>
                            <a href="{{ route('post_by_slug', ['slug' => $latest_post['slug'] ?? '']) }}" class="read-more">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        @if(!empty($datas) && is_array($datas))
                            @foreach ($datas as $item)
                                <div class="col-lg-6">
                                    <div class="blog-card card h-100">
                                        <img src="{{ $item['image'] ?? '' }}" class="blog-image" alt="{{ $item['title'] ?? '' }}">
                                        <div class="blog-content">
                                            <h3 class="blog-title">
                                                <a href="{{ route('post_by_slug', ['slug' => $item['slug'] ?? '']) }}" class="text-decoration-none text-dark">
                                                    {!! \Illuminate\Support\Str::limit($item['title'] ?? '', 60) !!}
                                                </a>
                                            </h3>
                                            <p class="blog-excerpt">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($item['content'] ?? ''), 150) !!}
                                            </p>
                                            <div class="blog-meta">
                                                <span><i class="bi bi-person"></i> {{ $item['writer'] ?? 'Anonymous' }}</span>
                                                <span><i class="bi bi-eye"></i> {{ $item['viewer'] ?? 0 }}</span>
                                                <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($item['created_at'] ?? now())->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                            </div>
                                            <a href="{{ route('post_by_slug', ['slug' => $item['slug'] ?? '']) }}" class="read-more">
                                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-info text-center">
                                    <i class="bi bi-info-circle me-2"></i>
                                    Tidak ada post yang tersedia saat ini.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Recent Posts -->
                    <div class="sidebar-card">
                        <div class="sidebar-header">
                            <i class="bi bi-clock-history me-2"></i> Post Terbaru
                        </div>
                        <div class="sidebar-body">
                            @if(!empty($latest_posts))
                                @foreach($latest_posts as $post)
                                    <div class="recent-post-item">
                                        <img src="{{ $post['image'] ?? '' }}" class="recent-post-image" alt="{{ $post['title'] ?? '' }}">
                                        <div class="recent-post-content">
                                            <a href="{{ route('post_by_slug', ['slug' => $post['slug'] ?? '']) }}" class="recent-post-title">
                                                {{ $post['title'] ?? '' }}
                                            </a>
                                            <div class="recent-post-date">
                                                <i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($post['created_at'] ?? now())->locale('id')->isoFormat('D MMMM YYYY') }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted mb-0">Tidak ada post terbaru.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-card">
                        <div class="sidebar-header">
                            <i class="bi bi-grid me-2"></i> Kategori
                        </div>
                        <div class="sidebar-body">
                            <ul class="categories-list">
                                <li>
                                    <a href="#">
                                        Berita Sekolah
                                        <span class="category-count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Kegiatan
                                        <span class="category-count">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Prestasi
                                        <span class="category-count">5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Pengumuman
                                        <span class="category-count">3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

