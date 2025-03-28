@extends('partials.main')
@section('content')
@push('css')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .content {
        flex: 0 0 70%;
        background-color: white;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .content h1 {
        font-weight: 600;
    }
    .sidebar {
        flex: 0 0 28%;
        background-color: white;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .sidebar h3 {
        margin-bottom: 10px;
    }
    .news-list {
        list-style: none;
        padding: 0;
    }
    .news-list li {
        margin-bottom: 10px;
    }
    .news-list a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        transition: color 0.3s;
    }
    .news-list a:hover {
        color: #007BFF;
    }
    .article-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .article-header h1 {
        font-size: 28px;
        color: #333;
        margin: 0;
    }
    .article-header .meta {
        color: #777;
        font-size: 14px;
    }
    .article-image img {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .article-content {
        line-height: 1.6;
        font-size: 16px;
        color: #555;
    }
</style>
@endpush
<main class="main">

    <!-- blog Section -->
    <section id="blog" class="portfolio section" style="padding-top: 5px !important;">

        <div class="container">
            <!-- Konten Utama -->
            <div class="content">
                <div class="article-header">
                    <div>
                        <h1>{{ $data['title'] }}</h1>
                        <div class="meta">Penulis: {{ $data['name'] }} | Pembaca: {{ $data['viewer'] }} | {{ Carbon\Carbon::parse($data['created_at'])->locale('id')->isoFormat('D MMMM YYYY') }}</div>
                    </div>
                </div>
                <div class="article-image">
                    <img src="{{ $data['image'] }}" alt="Gambar Berita">
                </div>
                <div class="article-content">
                    <p>{!! $data['content'] !!}</p>
                </div>
            </div>

            <!-- Sidebar Berita Lain -->
            <div class="sidebar">
                <h5>Berita Lain yang Relevan</h5>
                <ul class="news-list">
                    <li><a href="#">Judul Berita Terkait 1</a></li>
                    <li><a href="#">Judul Berita Terkait 2</a></li>
                    <li><a href="#">Judul Berita Terkait 3</a></li>
                    <li><a href="#">Judul Berita Terkait 4</a></li>
                    <li><a href="#">Judul Berita Terkait 5</a></li>
                </ul>
            </div>
        </div>



    </section><!-- /Portfolio Section -->

</main>
@endsection

