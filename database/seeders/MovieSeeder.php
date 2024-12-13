<?php

namespace Database\Seeders;

use App\System\Movie\Database\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::factory()->count(100)->create();
    }
}
