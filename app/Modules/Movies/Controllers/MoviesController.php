<?php

namespace App\Modules\Movies\Controllers;

use App\Modules\Movies\Interfaces\MovieInterface;
use App\Modules\Movies\Requests\MovieCreateRequest;
use App\Modules\Movies\Requests\MovieUpdateRequest;
use Ensue\Snap\Controllers\SnapController;
use Ensue\Snap\Requests\SnapRequest;
use Illuminate\Http\JsonResponse;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class MoviesController
 * @package App\Modules\Movies\Controllers
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
        return Inertia::render('Manage/Movie/Index', ['movies' => $this->repository->getList($request->all())]);
    }

    /**
     * @param MovieCreateRequest $request
     * @return JsonResponse
     */
    public function store(MovieCreateRequest $request): JsonResponse
    {
        return $this->responseOk($this->repository->create($request->all()));
    }

    /**
     * @param MovieUpdateRequest $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(MovieUpdateRequest $request, string $id): JsonResponse
    {
        return $this->responseOk($this->repository->update($id, $request->all()));
    }

    /**
     * @param SnapRequest $request
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(SnapRequest $request, string $id): JsonResponse
    {
        return $this->responseOk($this->repository->destroy($id));
    }

    /**
     * @param SnapRequest $request
     * @param string $id
     * @return Response
     */
    public function show(SnapRequest $request, string $id): Response
    {
        return Inertia::render('Manage/Movie/Show', ['movie' => $this->repository->getById($id)]);
    }

    /**
     * @param SnapRequest $request
     * @param string $id
     * @return JsonResponse
     */
    public function toggleStatus(SnapRequest $request, string $id): JsonResponse
    {
        return $this->responseOk($this->repository->toggleStatus($id));
    }
}
