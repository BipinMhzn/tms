<?php

namespace App\Modules\Users\Filters;

use Ensue\Snap\Filters\SnapFilter;

/**
 * Class UsersController
 * @package App\Modules\Users\Filters
 */
final class UsersFilter extends SnapFilter
{
    /**
     * To do filter here
     * @param string $keyword
     */
    public function keyword(string $keyword = ''): void
    {
       $this->title($keyword);
    }

}
