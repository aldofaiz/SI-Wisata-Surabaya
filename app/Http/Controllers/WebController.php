<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $location_categories = DB::table('location_categories')->get();
        return view('beranda',compact('location_categories'));
    }

    public function detail($id)
    {
        $location_categories = DB::table('location_categories')->get();
        $location = DB::table('locations')->where('id', '=', $id)->first();
        return view('wisata',compact('location_categories','locations'));
    }

    public function category($id)
    {
        $location_categories = DB::table('location_categories')->get();
        $location_category = DB::table('location_categories')->where('id', '=', $id)->first();
        //return dd($locations);
        return view('kategori',compact('location_categories','location_category'));
    }
}
