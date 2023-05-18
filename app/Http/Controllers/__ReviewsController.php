<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $reviews = Reviews::all();
        return response()->json($reviews);
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
            'user_id' => 'required',
            'location_id' => 'required',
            'reviews' => 'required'
        ]);

        $reviews = Reviews::create([
            'user_id' => $request->user_id,
            'location_id' => $request->location_id,
            'reviews' => $request->reviews
        ]);
        return response()->json($reviews);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $reviews = Reviews::find($id);
        return response()->json($reviews);
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
        //
        $this->validate($request,[
            'user_id' => 'required',
            'location_id' => 'required',
            'reviews' => 'required',
        ]);

        $reviews = Reviews::find($id);
        $reviews->user_id = $request->user_id;
        $reviews->location_id = $request->location_id;
        $reviews->reviews = $request->reviews;
        $reviews->save();
        return response()->json($reviews);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $reviews = Reviews::find($id);
        $reviews->delete();
        return response()->json($reviews);
    }
}
