@extends('partials.main')
@section('content')
@push('css')
<style>
    .post-header {
        position: relative;
        margin-bottom: 3rem;
    }
    .post-header::after {
        content: '';
        position: absolute;
        bottom: -1rem;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(to right, #007bff, transparent);
    }
    .post-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
        line-height: 1.3;
    }
    .post-meta {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        color: #666;
        font-size: 0.95rem;
    }
    .post-meta i {
        margin-right: 0.5rem;
        color: #007bff;
    }
    .post-image {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 2rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .post-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #444;
    }
    .post-content p {
        margin-bottom: 1.5rem;
    }
    .post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1.5rem 0;
    }
    .post-content h1, .post-content h2, .post-content h3, .post-content h4 {
        color: #333;
        margin: 2rem 0 1rem;
        font-weight: 600;
    }
    .post-content h1 { font-size: 2rem; }
    .post-content h2 { font-size: 1.75rem; }
    .post-content h3 { font-size: 1.5rem; }
    .post-content h4 { font-size: 1.25rem; }
    .post-content blockquote {
        border-left: 4px solid #007bff;
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #666;
    }
    .post-content ul, .post-content ol {
        margin: 1.5rem 0;
        padding-left: 2rem;
    }
    .post-content li {
        margin-bottom: 0.5rem;
    }
    .post-content a {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s;
    }
    .post-content a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    .post-footer {
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid #eee;
    }
    .post-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 2rem;
    }
    .post-tag {
        background: #f8f9fa;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        color: #666;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s;
    }
    .post-tag:hover {
        background: #007bff;
        color: #fff;
    }
    .post-navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #eee;
    }
    .nav-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #666;
        text-decoration: none;
        transition: color 0.3s;
    }
    .nav-link:hover {
        color: #007bff;
    }
    .nav-link i {
        font-size: 1.2rem;
    }
    .nav-link.prev {
        padding-right: 1rem;
    }
    .nav-link.next {
        padding-left: 1rem;
    }
    .nav-link span {
        font-size: 0.9rem;
    }
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
        text-decoration: none;
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
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    @if(isset($data) && is_array($data))
                        <article class="post">
                            <header class="post-header">
                                <h1 class="post-title">{{ $data['title'] ?? '' }}</h1>
                                <div class="post-meta">
                                    <span><i class="bi bi-person"></i> {{ $data['name'] ?? 'Anonymous' }}</span>
                                    <span><i class="bi bi-eye"></i> {{ $data['viewer'] ?? 0 }}</span>
                                    <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($data['created_at'] ?? now())->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                            </header>

                            @if(!empty($data['image']))
                                <img src="{{ env('API_URL_IMAGE').$data['image'] }}" alt="{{ $data['title'] ?? '' }}" class="post-image">
                            @endif

                            <div class="post-content">
                                {!! $data['content'] ?? '' !!}
                            </div>

                            <footer class="post-footer">
                                <div class="post-tags">
                                    <a href="#" class="post-tag">Berita Sekolah</a>
                                    <a href="#" class="post-tag">Kegiatan</a>
                                    <a href="#" class="post-tag">Prestasi</a>
                                </div>

                                <div class="post-navigation">
                                    <a href="#" class="nav-link prev">
                                        <i class="bi bi-arrow-left"></i>
                                        <span>Post Sebelumnya</span>
                                    </a>
                                    <a href="#" class="nav-link next">
                                        <span>Post Selanjutnya</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </footer>
                        </article>
                    @else
                        <div class="alert alert-info text-center">
                            <i class="bi bi-info-circle me-2"></i>
                            Post tidak ditemukan.
                        </div>
                    @endif
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
                                        <img src="{{ env('API_URL_IMAGE').$post['image'] ?? '' }}" class="recent-post-image" alt="{{ $post['title'] ?? '' }}">
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

