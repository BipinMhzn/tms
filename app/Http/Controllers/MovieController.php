<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Inertia\Inertia;
use Inertia\Response;

class MovieController extends Controller
{
    public function index(): Response
    {
        $movies = Movie::all();

        return Inertia::render('Movie/Index', ['movies' => $movies]);
    }

    public function show(Movie $movie): Response
    {
        return Inertia::render('Movie/Show', ['movie' => $movie]);
    }
}
