<?php

namespace App\System\User\Database\Models;

use Ensue\Snap\Foundation\Database\SnapModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class User extends SnapModel
{
    use HasUuids;

    protected string $defaultSortColumn = 'name';

}
