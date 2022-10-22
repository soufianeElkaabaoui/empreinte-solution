<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(5);
        return view('admin.reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $path = $request->file('image_url')->store('images'); // upload the image.
            $review = new Review;
            $review->client_name = $request->reviewer_name;
            $review->profession = $request->reviewer_profession;
            $review->image_url = $path;
            $review->comment = $request->reviewer_comment;
            $review->save();
            return back()->with('status', 'Bien ajoutée.');
        }
        return back()->with('status', 'Probléme du serveur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        // check if the file exist && there were no problems uploading the file:
            if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
                Storage::delete($review->image_url);
                $path = $request->file('image_url')->store('images'); // upload the image.
                $review->image_url = $path;
            }
            $review->client_name = $request->reviewer_name;
            $review->profession = $request->reviewer_profession;
            $review->comment = $request->reviewer_comment;
            $review->save();
            return back()->with('status', 'Bien modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
