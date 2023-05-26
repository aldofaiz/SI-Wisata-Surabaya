<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $review = Review::all();
        return response()->json($review);
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
            'location_id' => 'required',
            'user_id' => 'required',
            'review' => 'required',
        ]);

        $review = Review::create([
            'location_id' => $request->location_id,
            'user_id' => $request->user_id,
            'review' => $request->review,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $id)
    {
        //
        $review = Review::find($id);
        return response()->json($review);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $id)
    {
        //
        $this->validate($request,[
            'location_id' => 'required',
            'user_id' => 'required',
            'review' => 'required',
        ]);

        $review = Review::find($id);
        $review->location_id = $request->location_id;
        $review->user_id = $request->user_id;
        $review->review = $request->review;
        $review->save();
        return response()->json($review);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $id)
    {
        //
        $review = Review::find($id);
        $review->delete();
        return response()->json($review);
    }
}
