<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Inertia\Inertia;
use Inertia\Response;

class CinemaController extends Controller
{
    public function index(): Response
    {
        $movies = Movie::all();

        return Inertia::render('Manage/Cinema/Index', ['movies' => $movies]);
    }

    public function show(Movie $movie): Response
    {
        return Inertia::render('Manage/Cinema/Show', ['movie' => $movie]);
    }
}
