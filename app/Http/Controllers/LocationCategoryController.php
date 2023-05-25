<?php

namespace App\Http\Controllers;

use App\Models\LocationCategory;
use App\Http\Requests\StoreLocationCategoryRequest;
use App\Http\Requests\UpdateLocationCategoryRequest;

class LocationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $location_category = LocationCategory::all();
        return response()->json($location_category);
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
    public function store(StoreLocationCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LocationCategory $id)
    {
        //
        $location_category = LocationCategory::find($id);
        return response()->json($location_category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationCategoryRequest $request, LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationCategory $locationCategory)
    {
        //
    }
}
