<?php

namespace App\Modules\Cinemas\Requests;

use Ensue\Snap\Requests\SnapRequest;

/**
 * Class CinemaUpdateRequest
 * @package App\Modules\Cinemas\Requests
 */
final class CinemaUpdateRequest extends SnapRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:250'],
            'location' => ['required', 'string', 'max:250'],
            'status' => ['required', 'boolean'],
        ];
    }
}
