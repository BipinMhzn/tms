<?php

namespace App\Modules\Cinemas\Controllers;

use App\Modules\Cinemas\Interfaces\CinemaInterface;
use App\Modules\Cinemas\Requests\CinemaCreateRequest;
use App\Modules\Cinemas\Requests\CinemaUpdateRequest;
use Ensue\Snap\Controllers\SnapController;
use Ensue\Snap\Requests\SnapRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class CinemasController
 * @package App\Modules\Cinemas\Controllers
 */
final class CinemasController extends SnapController
{
    /**
     * CinemasController constructor.
     * @param CinemaInterface $repository
     */
    public function __construct(private readonly CinemaInterface $repository)
    {
    }

    /**
     * @param SnapRequest $request
     * @return Response
     */
    public function index(SnapRequest $request): Response
    {
        return Inertia::render('Manage/Cinema/Index', ['movies' => $this->repository->getList($request->all())]);
    }

    /**
     * @param CinemaCreateRequest $request
     * @return RedirectResponse
     */
    public function store(CinemaCreateRequest $request): RedirectResponse
    {
        $this->repository->create($request->validated());

        return to_route('manage.cinemas.index')->with('success', 'Cinema created.');
    }

    /**
     * @param CinemaUpdateRequest $request
     * @param int $cinema
     * @return RedirectResponse
     */
    public function update(CinemaUpdateRequest $request, int $cinema): RedirectResponse
    {
        $this->repository->update($cinema, $request->validated());

        return to_route('manage.cinemas.index')->with('success', 'Cinema updated.');
    }

    /**
     * @param int $cinema
     * @return RedirectResponse
     */
    public function destroy(int $cinema): RedirectResponse
    {
        $this->repository->destroy($cinema);

        return to_route('manage.cinemas.index')->with('success', 'Cinema deleted.');
    }

    /**
     * @param int $cinema
     * @return Response
     */
    public function show(int $cinema): Response
    {
        return Inertia::render('Manage/Cinema/Show', ['movie' => $this->repository->getById($cinema)]);
    }

    /**
     * @param int $cinema
     * @return RedirectResponse
     */
    public function toggleStatus(int $cinema): RedirectResponse
    {
        $this->repository->toggleStatus($cinema);

        return to_route('manage.cinemas.index')->with('success', 'Cinema deleted.');
    }
}
