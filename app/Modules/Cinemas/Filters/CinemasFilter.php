<?php

namespace App\Modules\Cinemas\Filters;

use Ensue\Snap\Filters\SnapFilter;

/**
 * Class CinemasController
 * @package App\Modules\Cinemas\Filters
 */
final class CinemasFilter extends SnapFilter
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
