<?php

namespace App\Modules\Public\Controllers;

use App\Modules\Public\Interfaces\MovieInterface;
use Ensue\Snap\Controllers\SnapController;
use Ensue\Snap\Requests\SnapRequest;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class MoviesController
 * @package App\Modules\Publics\Controllers
 */
final class MoviesController extends SnapController
{
    /**
     * MoviesController constructor.
     * @param MovieInterface $repository
     */
    public function __construct(private readonly MovieInterface $repository)
    {
    }

    /**
     * @param SnapRequest $request
     * @return Response
     */
    public function index(SnapRequest $request): Response
    {
        return Inertia::render('Movie/Index', ['movies' => $this->repository->getList($request->all())]);
    }

    /**
     * @param SnapRequest $request
     * @param string $id
     * @return Response
     */
    public function show (SnapRequest $request, string $id): Response
    {
        return Inertia::render('Movie/Show', ['movie' => $this->repository->getById($id)]);
    }
}
