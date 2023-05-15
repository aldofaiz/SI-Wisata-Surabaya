<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListLocations;

class ListLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show the list of locations
        $list_location = ListLocations::all();
        return response()->json($list_location);
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
        // Store the resource
        $this->validate($request,[
            'location_category_id' => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required',
        ]);

        $list_location = ListLocations::create([
            'location_category_id' => $request->location_category_id,
            'location_name' => $request->location_name,
            'location_address' => $request->location_address,
            'description' => $request->description,
            'banner' => $request->banner,
            'image' => $request->image,
        ]);
        return response()->json($list_location);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show item's details
        $list_location = ListLocations::find($id);
        return response()->json($list_location);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update the information data
        $this->validate($request,[
            'location_category_id' => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required'
        ]);

        $list_location = ListLocations::find($id);
        $list_location->location_category_id = $request->location_category_id;
        $list_location->location_name = $request->location_name;
        $list_location->location_address = $request->location_address;
        $list_location->image = $request->image;
        $list_location->description = $request->description;
        $list_location->banner = $request->banner;
        $list_location->image = $request->image;
        $list_location->save();
        return response()->json($list_location);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the specified resource from storage
        $list_location = ListLocations::find($id);
        $list_location->delete();
        return response()->json($list_location);
    }
}
