<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            RedirectsSeeder::class,
            MicrositesSeeder::class,
            Microsites_contentsSeeder::class
        ]);
    }
}
