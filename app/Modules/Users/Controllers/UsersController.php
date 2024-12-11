<?php

namespace App\Modules\Users\Controllers;

use App\Modules\Users\Interfaces\UserInterface;
use App\Modules\Users\Requests\UserCreateRequest;
use App\Modules\Users\Requests\UserUpdateRequest;
use Ensue\Snap\Controllers\SnapController;
use Ensue\Snap\Requests\SnapRequest;
use Illuminate\Http\JsonResponse;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Class UsersController
 * @package App\Modules\Users\Controllers
 */
final class UsersController extends SnapController
{
    /**
     * UsersController constructor.
     * @param UserInterface $repository
     */
    public function __construct(private readonly UserInterface $repository)
    {
    }

    /**
     * @param SnapRequest $request
     * @return Response
     */
    public function index(SnapRequest $request): Response
    {
        return Inertia::render('Manage/User/Index', ['users' => $this->repository->getList($request->all())]);
    }

    /**
     * @param UserCreateRequest $request
     * @return JsonResponse
     */
    public function store(UserCreateRequest $request): JsonResponse
    {
        return $this->responseOk($this->repository->create($request->all()));
    }

    /**
     * @param UserUpdateRequest $request
     * @param string $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, string $id): Response
    {
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
        return Inertia::render('Manage/User/Show', ['user' => $this->repository->update($id, $request->all())]);
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
