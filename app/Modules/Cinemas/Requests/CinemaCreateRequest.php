<?php

namespace App\Modules\Cinemas\Requests;

use Ensue\Snap\Requests\SnapRequest;

/**
 * Class CinemaCreateRequest
 * @package App\Modules\Cinemas\Requests
 */
final class CinemaCreateRequest extends SnapRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'location' => ['required', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
