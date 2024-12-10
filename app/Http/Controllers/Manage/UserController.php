<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $movies = Movie::all();

        return Inertia::render('Manage/User/Index', ['movies' => $movies]);
    }

    public function show(Movie $movie): Response
    {
        return Inertia::render('Manage/User/Show', ['movie' => $movie]);
    }
}
