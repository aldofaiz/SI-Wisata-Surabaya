<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $location_categories = DB::table('location_categories')->get();
        $reviews = DB::table('reviews')->join('locations', 'reviews.location_id', '=', 'locations.id')
        ->select('reviews.*', 'locations.banner', 'locations.location_name')->inRandomOrder()->get();
        return view('beranda',compact('location_categories', 'reviews'));
    }

    public function detail($id)
    {
        $location_categories = DB::table('location_categories')->get();
        $location = DB::table('locations')->where('id', '=', $id)->first();
        $reviews = DB::table('reviews')->join('locations', 'reviews.location_id', '=', 'locations.id')
        ->join('users', 'reviews.user_id', '=', 'users.id')
        ->select('reviews.*', 'locations.location_name', 'users.name')
        ->where('reviews.location_id', '=', $id)->get();
        return view('wisata',compact('location_categories','location','reviews'));
    }

    public function category($id)
    {
        $location_categories = DB::table('location_categories')->get();
        $location_category = DB::table('location_categories')->where('id', '=', $id)->first();
        $locations = DB::table('locations')
        ->join('location_categories', 'locations.category_id', '=', 'location_categories.id')
        ->select('locations.*', 'location_categories.name_category')
        ->where('location_categories.id', '=', $id)
        ->get();
        //return dd($locations);
        return view('kategori',compact('location_categories','location_category','locations'));
    }
}
