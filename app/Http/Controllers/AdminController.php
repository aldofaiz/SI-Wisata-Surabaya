<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dataWisata()
    {
        return view('admin.data_wisata');
    }

    public function createWisata()
    {
        return view('admin.create_wisata');
    }

    public function dataReview()
    {
        return view('admin.data_review');
    }
}
