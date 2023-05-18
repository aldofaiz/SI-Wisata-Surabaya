<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Location;
use Validator;
use App\Http\Resources\LocationResource;
use Illuminate\Http\JsonResponse;

class LocationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations = Location::all();

        return $this->sendResponse(LocationResource::collection($locations), 'Locations retrieved successfully');

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
    public function store(Request $request): JsonResponse
    {
        //

        $input = $request->all();
   
        $validator = Validator::make($input, [
            'location_category_id' => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $locations = Location::create($input);
   
        return $this->sendResponse(new LocationResource($locations), 'Locations created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $locations = Location::find($id);
  
        if (is_null($locations)) {
            return $this->sendError('Locations not found.');
        }
   
        return $this->sendResponse(new LocationResource($locations), 'Locations retrieved successfully.');
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
    public function update(Request $request, Location $locations): JsonResponse
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'location_category_id' => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'description' => 'required',
            'banner' => 'required',
            'image' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $locations->location_category_id = $input['location_category_id'];
        $locations->location_name = $input['location_name'];
        $locations->location_address = $input['location_address'];
        $locations->description = $input['description'];
        $locations->banner = $input['banner'];
        $locations->image = $input['image'];
        $locations->save();
   
        return $this->sendResponse(new LocationResource($locations), 'Locations updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $locations): JsonResponse
    {
        $locations->delete();
   
        return $this->sendResponse([], 'Locations deleted successfully.');
    }
}
