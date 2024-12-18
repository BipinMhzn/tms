<?php

namespace App\Modules\Cinemas\Controllers;

use App\Modules\Cinemas\Interfaces\CinemaInterface;
use App\Modules\Cinemas\Requests\CinemaCreateRequest;
use App\Modules\Cinemas\Requests\CinemaUpdateRequest;
use Ensue\Snap\Controllers\SnapController;
use Ensue\Snap\Foundation\FileUpload\Upload;
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
    use Upload;

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
        return Inertia::render('Manage/Cinema/Index', ['cinemas' => $this->repository->getList($request->validated())]);
    }

    /**
     * @param CinemaCreateRequest $request
     * @return RedirectResponse
     */
    public function store(CinemaCreateRequest $request): RedirectResponse
    {
        $thumbnailUrl = $this->upload($request, '/images/cinemas', true, 'thumbnail');
        $inputs = $request->validated();
        $inputs['thumbnail_url'] = $thumbnailUrl['path'];
        unset($inputs['thumbnail']);

        $this->repository->createCinema($inputs);

        return to_route('manage.cinemas.index')->with('success', 'Cinema created successfully.');
    }

    /**
     * @param CinemaUpdateRequest $request
     * @param int $cinema
     * @return RedirectResponse
     */
    public function update(CinemaUpdateRequest $request, int $cinema): RedirectResponse
    {
        $this->repository->updateCinema($cinema, $request->validated());

        return to_route('manage.cinemas.index')->with('success', 'Cinema updated successfully.');
    }

    /**
     * @param int $cinema
     * @return RedirectResponse
     */
    public function destroy(int $cinema): RedirectResponse
    {
        $this->repository->destroyCinema($cinema);

        return to_route('manage.cinemas.index')->with('success', 'Cinema deleted successfully.');
    }

    /**
     * @param int $cinema
     * @return Response
     */
    public function show(int $cinema): Response
    {
        return Inertia::render('Manage/Cinema/Show', ['cinema' => $this->repository->getCinemaById($cinema)]);
    }

    /**
     * @param int $cinema
     * @return RedirectResponse
     */
    public function status(int $cinema): RedirectResponse
    {
        $this->repository->toggleCinemaStatus($cinema);

        return to_route('manage.cinemas.index')->with('success', 'Cinema status updated successfully.');
    }
}
