<?php

namespace App\Modules\Users\Repositories;

use App\Modules\Users\Filters\UsersFilter;
use App\Modules\Users\Interfaces\UserInterface;
use App\Modules\Users\Database\Models\User;
use Ensue\Snap\Repositories\SnapRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserRepository
 * @package App\Modules\Users\Repositories
 */
final class UserRepository extends SnapRepository implements UserInterface
{
    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Builder $builder
     * @return UsersFilter
     */
    public function getFilter(Builder $builder): UsersFilter
    {
        return new UsersFilter($builder);
    }

}
