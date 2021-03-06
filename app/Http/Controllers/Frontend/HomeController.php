<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Berita;
use App\Kontak;
use App\Prestasi;
use App\Alumni;

class HomeController extends Controller
{

    public function index()
    {
        $berita = Berita::latest()->paginate(3);
        $kontak = Kontak::all();

        return view('welcome', compact('berita', 'kontak'));
    }


    public function kontak(){
        $kontak = Kontak::all();

        return view('frontend.kontak.index', compact('kontak'));
    }

    public function alumni(){

        $alumni = Alumni::all();
        $kontak = Kontak::all();

        return view('frontend.alumni.index', compact('kontak', 'alumni'));
    }

    public function prestasi(){

        $prestasi = Prestasi::all();
        $kontak = Kontak::all();

        return view('frontend.prestasi.index', compact('prestasi', 'kontak'));
    }
}
