<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function detail()
    {
        return view('wisata');
    }

    public function category()
    {
        return view('kategori');
    }
}
