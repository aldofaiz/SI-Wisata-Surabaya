<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $location = Location::all();
        return response()->json($location);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'location_category_id' => 'required',
            'location_name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'image3' => 'required',
        ]);

        $location = Location::create([
            'location_category_id' => $request->location_category_id,
            'location_name' => $request->location_name,
            'address' => $request->address,
            'description' => $request->description,
            'banner' => $request->banner,
            'image' => $request->image,
            'image2' => $request->image2,
            'image3' => $request->image3,
        ]);
  
        return redirect()->route('data_wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        $location = Location::findOrFail($id);
        return response()->json($location);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //
        $this->validate($request,[
            'location_category_id' => 'required',
            'location_name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'image3' => 'required',
        ]);

        $location = Location::find($id);
        $location->location_category_id = $request->location_category_id;
        $location->location_name = $request->location_name;
        $location->address = $request->address;
        $location->description = $request->description;
        $location->banner = $request->banner;
        $location->image = $request->image;
        $location->image2 = $request->image2;
        $location->image3 = $request->image3;
        $location->save();
        return response()->json($location);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
        $location = Location::find($id);
        $location->delete();
        return response()->json($location);
    }
}
