<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data Film
    private $allFilms = [
        [
            'id' => 1, 'judul' => 'The Dark Knight', 'tahun' => 2008, 'sutradara' => 'Christopher Nolan', 'rating' => 5.0,
            'poster' => 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
            'sinopsis' => 'Ketika ancaman yang dikenal sebagai Joker mendatangkan kekacauan di Gotham, Batman harus menerima salah satu ujian psikologis dan fisik terbesar.'
        ],
        [
            'id' => 2, 'judul' => 'Whiplash', 'tahun' => 2014, 'sutradara' => 'Damien Chazelle', 'rating' => 4.5,
            'poster' => 'https://image.tmdb.org/t/p/w500/7fn624j5lj3xTme2SgiLCeuedmO.jpg',
            'sinopsis' => 'Seorang drummer jazz muda yang menjanjikan mendaftar di konservatori musik yang keras di mana impian kebesarannya dibimbing oleh instruktur kejam.'
        ],
        [
            'id' => 3, 'judul' => 'The Wolf of Wall Street', 'tahun' => 2013, 'sutradara' => 'Martin Scorsese', 'rating' => 5.0,
            'poster' => 'img/WallStreet2013poster.jpg',
            'sinopsis' => 'Berdasarkan kisah nyata Jordan Belfort, dari kebangkitannya menjadi pialang saham kaya raya hingga kejatuhannya yang melibatkan kejahatan dan korupsi.'
        ],
        [
            'id' => 4, 'judul' => 'Her', 'tahun' => 2013, 'sutradara' => 'Spike Jonze', 'rating' => 5.0,
            'poster' => 'img/Her_Joaquin_Phoenix_Poster_2013.jpg',
            'sinopsis' => 'Dalam waktu dekat, seorang penulis yang kesepian mengembangkan hubungan tidak biasa dengan sistem operasi yang dirancang untuk memenuhi setiap kebutuhannya.'
        ],
        [
            'id' => 5, 'judul' => 'Fight Club', 'tahun' => 1999, 'sutradara' => 'David Fincher', 'rating' => 4.5,
            'poster' => 'https://image.tmdb.org/t/p/w500/pB8BM7pdSp6B6Ih7QZ4DrQ3PmJK.jpg',
            'sinopsis' => 'Seorang pekerja kantoran yang menderita insomnia dan pembuat sabun yang ceroboh membentuk klub pertarungan bawah tanah.'
        ],
        [
            'id' => 6, 'judul' => 'Get Out', 'tahun' => 2017, 'sutradara' => 'Jordan Peele', 'rating' => 4.0,
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMjUxMDQwNjcyNl5BMl5BanBnXkFtZTgwNzcwMzc0MTI@._V1_FMjpg_UX1000_.jpg',
            'sinopsis' => 'Seorang pemuda Afrika-Amerika mengunjungi orang tua pacar kulit putihnya untuk akhir pekan, di mana ketegangan rasial mencapai titik didih.'
        ],
        [
            'id' => 7, 'judul' => 'Spider-Man: Across the Spider-Verse', 'tahun' => 2023, 'sutradara' => 'Joaquim Dos Santos', 'rating' => 4.0,
            'poster' => 'https://image.tmdb.org/t/p/w500/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg',
            'sinopsis' => 'Miles Morales terlempar melintasi Multiverse, di mana ia bertemu tim Spider-People yang ditugaskan melindungi keberadaannya.'
        ],
        [
            'id' => 8, 'judul' => 'Top Gun: Maverick', 'tahun' => 2022, 'sutradara' => 'Joseph Kosinski', 'rating' => 3.5,
            'poster' => 'img/topgunn.jpeg',
            'sinopsis' => 'Setelah tiga puluh tahun, Maverick masih mendorong batasan sebagai penerbang angkatan laut teratas, tetapi harus menghadapi hantu masa lalunya.'
        ],
        [
            'id' => 9, 'judul' => 'Gone Girl', 'tahun' => 2014, 'sutradara' => 'David Fincher', 'rating' => 3.5,
            'poster' => 'img/gonegirl.jpg',
            'sinopsis' => 'Dengan hilangnya istrinya yang menjadi fokus sirkus media yang intens, seorang pria melihat sorotan beralih padanya saat dia dicurigai.'
        ],
        [
            'id' => 10, 'judul' => 'WALL·E', 'tahun' => 2008, 'sutradara' => 'Andrew Stanton', 'rating' => 4.5,
            'poster' => 'img/walle.jpeg',
            'sinopsis' => 'Di masa depan yang jauh, robot pengumpul sampah kecil secara tidak sengaja memulai perjalanan luar angkasa yang pada akhirnya akan menentukan nasib umat manusia.'
        ],
        [
            'id' => 11, 'judul' => 'Se7en', 'tahun' => 1995, 'sutradara' => 'David Fincher', 'rating' => 4.5,
            'poster' => 'img/Seven_poster.jpg',
            'sinopsis' => 'Dua detektif, seorang pemula dan seorang veteran, memburu seorang pembunuh berantai yang menggunakan tujuh dosa mematikan sebagai motif.'
        ],
        [
            'id' => 12, 'judul' => 'The Shawshank Redemption', 'tahun' => 1994, 'sutradara' => 'Frank Darabont', 'rating' => 4.5,
            'poster' => 'https://upload.wikimedia.org/wikipedia/id/8/81/ShawshankRedemptionMoviePoster.jpg',
            'sinopsis' => 'Dua pria yang dipenjara menjalin ikatan selama beberapa tahun, menemukan penghiburan dan penebusan akhir melalui tindakan kesusilaan umum.'
        ]
    ];

    public function login(Request $request) {
        if ($request->session()->has('username')) return redirect()->route('dashboard');
        return view('login');
    }

    public function submitLogin(Request $request) {
        $username = strtolower($request->input('username'));
        $request->session()->put('username', $username); // Simpan ke session
        return redirect()->route('dashboard');
    }

    public function logout(Request $request) {
        $request->session()->forget('username');
        return redirect()->route('login');
    }

    public function dashboard(Request $request) {
        if (!$request->session()->has('username')) return redirect()->route('login');
        $username = $request->session()->get('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request) {
        if (!$request->session()->has('username')) return redirect()->route('login');
        $username = $request->session()->get('username');
        
        // LOGIC PERSONALISASI
        if ($username == 'karina') {
            $films = array_slice($this->allFilms, 6, 6);
        } else if ($username == 'edryan') {
            $films = array_slice($this->allFilms, 0, 6); 
        } else {
            $films = $this->allFilms; // Orang lain dapet semua
        }

        return view('pengelolaan', compact('films', 'username'));
    }

    public function profile(Request $request) {
        if (!$request->session()->has('username')) return redirect()->route('login');
        $username = $request->session()->get('username');
        return view('profile', compact('username'));
    }
}