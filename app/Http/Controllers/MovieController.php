<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view ('movies', compact('movies'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::with('reviews.user')->findOrFail($id);
        

        // $reviewController = new ReviewController();
        // $reviews = $reviewController->getReviewsForMovie($id); // custom method
        
       // dd ($movie);
       // Calculate average rating
        //dd(DB::table('movies')->leftjoin('reviews', 'reviews.movie_id', '=', 'movies.id')->select('movies.title as kotar')->get());
        
        dd (sizeof ([1,3,5,6]));
        $averageRating = $movie->reviews->avg('rating');
        
        // Add a new attribute dynamically
        $movie->average_rating = round($averageRating, 1); // optional rounding

        return view ('movie', compact('movie'));
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
