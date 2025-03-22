<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    // get data posts
    public function getPost(){
        // get data form api
        $url = 'https://test.roudlotussalam.com/api/data-posts/';
        $client_id = 'a7f77e97-ba5b-40f6-9cd2-73aa67ffb71e';
        $client_key = 'MpfPVNgvH0VpoVw2cWcYp8CvSNyZSUeI';

        $response = Http::withHeaders([
            'Client-ID' => $client_id,
            'Client-Key' => $client_key
        ])->get($url);

        $datas = $response->json()['data'] ?? null;

        // dd($datas);

        // Mengecek apakah permintaan berhasil
        if ($response->successful() && !empty($datas)) {
            // Mengembalikan data yang diterima
            // return response()->json($response->json());
            return view('post', compact('datas'));
        } else {
            // notif
            session()->flash('message', 'Tidak ada post atau gagal mengambil data.');

            // Kembalikan ke halaman post dengan data kosong atau null
            return view('post', compact('datas'));
        }
    }

    // get post by id
    public function getPostBySlug(Request $request){
        $url = 'https://test.roudlotussalam.com/api/get-post';
        $client_id = 'a7f77e97-ba5b-40f6-9cd2-73aa67ffb71e';
        $client_key = 'MpfPVNgvH0VpoVw2cWcYp8CvSNyZSUeI';

        $slug = $request['slug'];


        $response = Http::withHeaders([
            'Client-ID' => $client_id,
            'Client-Key' => $client_key
        ])->post($url, [
            'slug' => $slug // Menambahkan parameter slug ke query string
        ]);

        $data = $response->json()?? null;

        // Mengecek apakah permintaan berhasil
        if ($response->successful() && !empty($data)) {
            // Mengembalikan data yang diterima
            // return response()->json($response->json());
            return view('postbyslug', compact('data'));
        } else {
            // notif
            session()->flash('message', 'Tidak ada post atau gagal mengambil data.');

            // Kembalikan ke halaman post dengan data kosong atau null
            return view('postbyslug', compact('data'));
        }
    }
}
