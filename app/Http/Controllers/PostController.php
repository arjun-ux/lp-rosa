<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class PostController extends Controller
{
    private const API_ENDPOINTS = [
        'posts' => '/data-posts',
        'post' => '/get-post'
    ];

    private string $baseUrl;
    private string $clientId;
    private string $clientKey;

    public function __construct()
    {
        $this->baseUrl = env('API_URL');
        $this->clientId = env('API_ID');
        $this->clientKey = env('API_KEY');
    }

    /**
     * Display a listing of posts.
     *
     * @return View
     */
    public function index(): View
    {
        // Check if data exists in cache
        $cacheKey = 'blog-posts-data';
        if (Cache::has($cacheKey)) {
            $cachedData = Cache::get($cacheKey);
            return view('post', $cachedData);
        }

        // If not in cache, make the API request
        $response = $this->makeApiRequest(self::API_ENDPOINTS['posts']);
        $datas = $response->json()['data'] ?? [];

        // Default values if no data
        $latest_post = null;
        $latest_posts = [];

        // Process data if available
        if (!empty($datas)) {
            // Get the latest post (first item)
            if (isset($datas[0])) {
                $latest_post = [
                    'title' => $datas[0]['title'] ?? '',
                    'slug' => $datas[0]['slug'] ?? '',
                    'content' => $datas[0]['content'] ?? '',
                    'image' => $datas[0]['image'] ?? '',
                    'writer' => $datas[0]['writer'] ?? '',
                    'viewer' => $datas[0]['viewer'] ?? 0,
                    'created_at' => $datas[0]['created_at'] ?? now(),
                ];
            }

            // Get 5 latest posts for sidebar
            $latest_posts = array_slice($datas, 0, 5);

            // Exclude latest post from main listing
            $datas = array_slice($datas, 1);
        }

        if (!$response->successful() || empty($datas)) {
            session()->flash('message', 'Tidak ada post atau gagal mengambil data.');
        }

        // Store the data in an array for caching
        $viewData = compact('datas', 'latest_post', 'latest_posts');

        // Cache the data for 5 minutes
        Cache::put($cacheKey, $viewData, 300);

        return view('post', $viewData);
    }

    /**
     * Display the specified post by slug.
     *
     * @param Request $request
     * @return View
     */
    public function show(Request $request): View
    {
        $slug = $request['slug'];
        $cacheKey = "blog-post-{$slug}";

        // Check if data exists in cache
        if (Cache::has($cacheKey)) {
            $cachedData = Cache::get($cacheKey);
            return view('postbyslug', $cachedData);
        }

        // If not in cache, make the API request
        $response = $this->makeApiRequest(self::API_ENDPOINTS['post'], ['slug' => $slug], 'post');
        $data = $response->json() ?? [];

        // Get latest posts for sidebar
        $latestPostsResponse = $this->makeApiRequest(self::API_ENDPOINTS['posts']);
        $latest_posts = array_slice($latestPostsResponse->json()['data'] ?? [], 0, 5);

        if (!$response->successful() || empty($data)) {
            session()->flash('message', 'Tidak ada post atau gagal mengambil data.');
        }

        // Increment view count if successful
        if ($response->successful() && !empty($data)) {
            // This could be another API call to increment views if needed
        }

        // Store the data in an array for caching
        $viewData = compact('data', 'latest_posts');

        // Cache the data for 30 minutes
        Cache::put($cacheKey, $viewData, 1800);

        return view('postbyslug', $viewData);
    }

    /**
     * Make API request with proper headers
     *
     * @param string $endpoint The API endpoint
     * @param array $params Optional parameters for the request
     * @param string $method HTTP method (get/post)
     * @return \Illuminate\Http\Client\Response
     */
    private function makeApiRequest($endpoint, $params = [], $method = 'get')
    {
        $url = $this->baseUrl . $endpoint;

        $request = Http::withHeaders([
            'Client-ID' => $this->clientId,
            'Client-Key' => $this->clientKey
        ]);

        if ($method === 'post') {
            return $request->post($url, $params);
        }

        return $request->get($url);
    }
}
