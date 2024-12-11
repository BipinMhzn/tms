<?php

namespace App\Modules\Movies\Filters;

use Ensue\Snap\Filters\SnapFilter;

/**
 * Class MoviesController
 * @package App\Modules\Movies\Filters
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
