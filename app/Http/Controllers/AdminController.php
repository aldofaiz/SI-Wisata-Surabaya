<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
        $locations = DB::table('locations')->get();
        return view('admin.data_wisata', compact('locations'));
    }

    public function createWisata()
    {
        $location_categories = DB::table('location_categories')->get();
        return view('admin.create_wisata', compact('location_categories'));
    }

    public function dataLocationCategory()
    {
        $location_categories = DB::table('location_categories')->get();
        return view('admin.data_location_category',compact('location_categories'));
    }

    public function createLocationCategory()
    {
        return view('admin.create_location_category');
    }

    public function dataReview()
    {
        $reviews = DB::table('reviews')
        ->join('locations', 'reviews.location_id', '=', 'locations.id')
        ->join('users', 'reviews.user_id', '=', 'users.id')
        ->select('reviews.*', 'locations.location_name', 'users.name')
        ->get();
        // return dd($reviews);
        return view('admin.data_review', compact('reviews'));
    }
}
