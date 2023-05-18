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
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $locations = Location::create([
            'location_category_id' => $request->location_category_id,
            'location_name' => $request->location_name,
            'location_address' => $request->location_address,
            'description' => $request->description,
            'banner' => $request->banner,
            'image' => $request->image,
        ]);

        if ($image = $request->image) {
            foreach ($image as $images) {
                $article->addMedia($images)->toMediaCollection('image');
            }
        }
   
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
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
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

        if ($image = $request->image) {
            $article->clearMediaCollection('image');
            foreach ($image as $images) {
                $article->addMedia($images)->toMediaCollection('image');
            }
        }

        return [
            'message' => 'Article updated successfully ',
            'data' => new ArticleResource($article)
        ];
   
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
