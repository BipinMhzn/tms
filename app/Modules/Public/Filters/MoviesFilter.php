<?php

namespace App\Modules\Public\Filters;

use Ensue\Snap\Filters\SnapFilter;

/**
 * Class PublicsController
 * @package App\Modules\Publics\Filters
 */
final class MoviesFilter extends SnapFilter
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
