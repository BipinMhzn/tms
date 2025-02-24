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
            'title' => ['required', 'string', 'max:250'],
            'description' => ['nullable', 'string', 'max:250'],
            'location' => ['required', 'string', 'max:250'],
            'status' => ['required', 'boolean'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'halls' => ['nullable', 'array'],
            'halls.*.title' => ['required', 'string', 'max:250'],
            'halls.*.status' => ['required', 'boolean'],
        ];
    }
}
