<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Reviewer;

class MovieController extends Controller
{
    public function allMovies() 
    {
        return Movie::all();
    }

    public function showMovie($id)
    {
        $movie = Movie::with('directors', 'actors', 'genres', 'ratings')->findOrFail($id);
        return $movie->load('directors', 'actors', 'genres', 'ratings');
    }

    public function getDirector($id)
    {
       $director = Director::with('movies')->findOrFail($id);
       return $director->load('movies'); 
    }

    public function getActor($id)
    {
        $actor = Actor::with('movies')->findOrFail($id);
        return $actor->load('movies');
    }

    public function movieSelectedGenre()
    {
        
    }
}
