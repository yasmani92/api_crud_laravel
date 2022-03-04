<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::get();
        return json_encode($movies);
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        Movie::create($request->all());
    }

    
    public function show(Movie $movie)
    {
        $movie = Movie::find($movie);
        return json_encode($movie);
    }

    
    public function edit(Movie $movie)
    {
        return json_encode($movie);
    }

    public function update(Request $request, Movie $movie)
    {
        Movie::update($request->all());
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
    }
}
