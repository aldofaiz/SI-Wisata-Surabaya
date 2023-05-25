<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function dataLocationCategory()
    {
        //$location_category = Http::get('http://localhost/api/locations');
        $location_category = DB::table('location_category')->get();
        return dd($location_category);
        //return view('admin.data_location_category',compact($location_category));
    }

    public function createLocationCategory()
    {
        return view('admin.create_location_category');
    }

    public function dataReview()
    {
        return view('admin.data_review');
    }
}
