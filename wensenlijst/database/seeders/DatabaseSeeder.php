<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Creëer 10 gebruikers en 20 wensen
        \App\Models\User::factory(10)->create();
        $this->call(WishSeeder::class);
    }
}
