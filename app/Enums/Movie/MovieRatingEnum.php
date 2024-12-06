<?php

namespace App\Enums\Movie;

enum MovieRatingEnum: string
{
    case GENERAL_AUDIENCES = 'G';

    case PARENTAL_GUIDANCE_SUGGESTED = 'PG';

    case PARENTS_STRONGLY_CAUTIONED = 'PG-13';

    case RESTRICTED = 'R';

    case CLEARLY_ADULT = 'NC-17';
}
