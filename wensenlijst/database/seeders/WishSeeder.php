<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wish;

class WishSeeder extends Seeder
{
    public function run()
    {
        Wish::factory()->count(20)->create();
    }
}
