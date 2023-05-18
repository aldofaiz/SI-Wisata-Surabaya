<?php

namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Review;
use Validator;
use App\Http\Resources\ReviewResource;
use Illuminate\Http\JsonResponse;
   
class ReviewController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        //

        $review = Review::all();
    
        return $this->sendResponse(ReviewResource::collection($review), 'Review retrieved successfully.');
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
            'user_id' => 'required',
            'location_id' => 'required',
            'reviews' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $review = Review::create($input);
   
        return $this->sendResponse(new ReviewResource($review), 'Review created successfully.');
    } 

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $review = Review::find($id);
  
        if (is_null($review)) {
            return $this->sendError('Review not found.');
        }
   
        return $this->sendResponse(new ReviewResource($review), 'Review retrieved successfully.');
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
    public function update(Request $request, Review $review): JsonResponse
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'location_id' => 'required',
            'reviews' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $review->user_id = $input['user_id'];
        $review->location_id = $input['location_id'];
        $review->reviews = $input['reviews'];
        $review->save();
   
        return $this->sendResponse(new ReviewResource($review), 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review): JsonResponse
    {
        $review->delete();
   
        return $this->sendResponse([], 'Review deleted successfully.');
    }
}
